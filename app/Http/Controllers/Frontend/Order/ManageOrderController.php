<?php

namespace App\Http\Controllers\Frontend\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddOrderFromCompanyRequest;
use App\Http\Requests\Orders\CreateOrderLfoRequest;
use App\Http\Requests\Orders\CreateOrderRequest;
use App\Http\Requests\Orders\UpdateOrderLFORequest;
use App\Http\Requests\Orders\UpdateOrderRequest;
use App\Models\Company;
use App\Models\CompanyOrder;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Throwable;

class ManageOrderController extends Controller
{
    public function addOrder(AddOrderFromCompanyRequest $request, $type = null)
    {
        $companies = Company::status()->get(['id', 'companyName']);

        $data = $request->validated();

        if ($type == 'ask') {
            return view('lc.order.ask', compact('companies'));
        } elseif ($type == 'bid') {
            return view('lc.order.bid', compact('companies'));
        } elseif ($type == 'lfo') {
            return view('lc.order.bid', compact('companies'));
        }
        return view('lc.add-order', compact('companies', 'data'));
    }

    public function storeOrder(CreateOrderRequest $createOrderRequest)
    {
        $data = $createOrderRequest->validated();
        CompanyOrder::create($data);

        try {
            $check_isset = Watchlist::where(['user_id' => auth()->id(), 'company_id' => $data['company_id']])->count();

            if ($check_isset) {
                return redirect()->route('orders');
            }
            Watchlist::create([
                'user_id' => auth()->id(),
                'company_id' => $data['company_id'],
                'type' => 'All',
            ]);

        } catch (Throwable $exception) {
            report($exception);
        }

        return redirect()->route('orders');
    }

    public function storeLfo(CreateOrderLfoRequest $createOrderLfoRequest)
    {
        $data = $createOrderLfoRequest->validated();

        try {
            $check_isset = Watchlist::where(['user_id' => auth()->id(), 'company_id' => $data['company_id']])->count();

            if ($check_isset) {
                return redirect()->route('orders');
            }
            Watchlist::create([
                'user_id' => auth()->id(),
                'company_id' => $data['company_id'],
                'type' => 'All',
            ]);

        } catch (Throwable $exception) {
            report($exception);
        }

        return redirect()->route('orders');
    }

    public function show($id)
    {
        $order = CompanyOrder::with('company')->findOrFail($id);

        if (!Gate::allows('show-order', $order)) {
            abort(403);
        }

        if ($order->type === 'LFO') {
            return view('lc.order.show-lfo', compact('order'));
        }
        return view('lc.order.show', compact('order'));
    }

    public function edit($id)
    {
        $order = CompanyOrder::with('company')->findOrFail($id);

        if (!Gate::allows('edit-order', $order)) {
            abort(403);
        }

        $companies = Company::status()->get(['id', 'companyName']);

        if ($order->type === 'ASK') {
            return view('lc.order.ask-edit', compact('order', 'companies'));
        } elseif ($order->type === 'BID') {
            return view('lc.order.bid-edit', compact('order', 'companies'));
        } elseif ($order->type === 'LFO') {
            return view('lc.order.lfo-edit', compact('order', 'companies'));
        }

        return view('lc.order.ask-edit', compact('order', 'companies'));
    }

    public function update(UpdateOrderRequest $updateOrderRequest, CompanyOrder $order_lc)
    {
        if (!Gate::allows('edit-order', $order_lc)) {
            abort(403);
        }

        $data = $updateOrderRequest->validated();

        if ($data['share_price'] != $order_lc->share_price || $data['valuation'] != $order_lc->valuation) {
            if ($order_lc->publish_time > now()->subDays(30)->endOfDay()) {
                return back()->with('error', 'Can be modified after 30 days');
            }
            if (!$order_lc->user_can_update) {
                return back()->with(['error' => 'You have run out of attempts to update, you can only make changes once']);
            }
            $order_lc->update($data + ['user_can_update' => 0, 'status' => 'moderation']);
            return back();
        }
        $order_lc->update($data + ['status' => 'moderation']);
        return back();
    }

    public function updateLfo(UpdateOrderLFORequest $updateOrderRequest, CompanyOrder $order)
    {
        if (!Gate::allows('edit-order', $order)) {
            abort(403);
        }
        if (!Gate::allows('update-order', $order)) {
            return back()->with('error', 'You have run out of attempts to update, you can only make changes once');
        }
        $order->update($updateOrderRequest->validated() + ['status' => 'moderation']);
        return back();
    }

    public function orderStatus(Request $request)
    {
        $companyOrder = CompanyOrder::find($request->id);

        if (!Gate::allows('edit-order', $companyOrder)) {
            abort(403);
        }
        if ($request->status == false) {
            DB::table('company_orders')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('company_orders')->where('id', $request->id)->update(['status' => 'inactive']);
        }

        return response()->json(['msg' => 'Successfully updated status', 'status' => true]);
    }
}
