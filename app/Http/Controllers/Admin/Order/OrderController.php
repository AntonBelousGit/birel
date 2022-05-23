<?php

namespace App\Http\Controllers\Admin\Order;

use App\Events\OrderUpdateEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\Admin\AdminUpdateOrderRequest;
use App\Models\Company;
use App\Models\CompanyOrder;
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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CompanyOrder $companyOrder
     * @return Response
     */
    public function show(CompanyOrder $companyOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $order
     * @return View
     */
    public function edit($order)
    {
        $companies = Company::get(['id', 'companyName']);
        $order = CompanyOrder::with('user', 'company')->find($order);

        return view('admin.orders.edit', compact('companies', 'order'));
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

        if ($data['status'] == 'active') {
            $order->load('user');
            $user = $order->user;

            if ($user->active_order > 0) {
                event(new OrderUpdateEvent($user, '-'));
            } else {
                return back()->with('error', 'The error message here!');
            }
        }

        if ($order->status == 'active' && $data['status'] != 'active') {
            $order->load('user');
            $user = $order->user;

            event(new OrderUpdateEvent($user, '+'));
        }

        $order->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CompanyOrder $companyOrder
     * @return Response
     */
    public function destroy(CompanyOrder $companyOrder)
    {
        //
    }
}
