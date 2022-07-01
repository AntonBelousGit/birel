<?php

namespace App\Http\Controllers\Admin\Order;

use App\Events\OrderUpdateEvent;
use App\Events\OrderUserStatusEvent;
use App\Events\WatchlistNotificationEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\Admin\AdminUpdateLfoOrderRequest;
use App\Http\Requests\Orders\Admin\AdminUpdateOrderRequest;
use App\Models\Company;
use App\Models\CompanyOrder;
use App\Models\Watchlist;
use Arr;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index($type = null)
    {
        $orders_query = CompanyOrder::query();

        if (is_null($type)) {
            $orders_query->whereNotNull('type');
        } else {
            $orders_query->where('type', $type);
        }
        $orders = $orders_query->with('user', 'company')->get();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $order
     * @return View
     */
    public function edit($order)
    {
        $companies = Company::status()->get(['id', 'companyName']);
        $order = CompanyOrder::with('user', 'company')->find($order);

        if ($order->type !== 'LFO') {
            return view('admin.orders.edit', compact('companies', 'order'));
        }
        return view('admin.orders.edit-lfo', compact('companies', 'order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdminUpdateOrderRequest $adminUpdateOrderRequest
     * @param CompanyOrder $order
     * @return RedirectResponse
     */
    public function update(AdminUpdateOrderRequest $adminUpdateOrderRequest, CompanyOrder $order)
    {

        $data = $adminUpdateOrderRequest->validated();
        $this->updateOrder($data, $order);
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdminUpdateLfoOrderRequest $adminUpdateOrderRequest
     * @param CompanyOrder $order
     * @return RedirectResponse
     */
    public function updateLFO(AdminUpdateLfoOrderRequest $adminUpdateOrderRequest, CompanyOrder $order)
    {
        $data = $adminUpdateOrderRequest->validated();
        $this->updateOrder($data, $order);
        $user = $order->user;
        $this->notification($order, $user);
        return back();
    }


    protected function updateOrder($data, $order)
    {
        $user = $order->user;
        if ($data['status'] == 'active') {
            $order->load('user');
            if ($user->active_order > 0) {
                event(new OrderUpdateEvent($user, '-'));
            } else {
                return back()->with('error', 'Max count active order');
            }
        }

        if ($order->status == 'active' && $data['status'] != 'active') {
            $order->load('user');
            event(new OrderUpdateEvent($user, '+'));
        }

        $order->update($data);
        $this->notification($order, $user);
    }

    protected function notification($order, $user)
    {
        if ($order->status == 'active') {
            $company = $order->company;
            $type = $order->type;
            $company_id = $order->company_id;

            $message = 'Your    ' . $order->type . ' on "' . $company?->companyName . '" has been placed on platform.';
            event(new OrderUserStatusEvent($user, $message));
            event(new WatchlistNotificationEvent($user,$company_id,$type,$company));
        }

        if ($order->status == 'inactive') {
            $company = $order->company;
            $message = 'Your ' . $order->type .' on "'. $company?->companyName  .'" did not facilitate moderation.';
            event(new OrderUserStatusEvent($user, $message));
        }
    }
}
