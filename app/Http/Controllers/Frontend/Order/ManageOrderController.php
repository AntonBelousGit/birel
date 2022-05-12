<?php

namespace App\Http\Controllers\Frontend\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\CreateOrderRequest;
use App\Http\Requests\Orders\UpdateOrderRequest;
use App\Models\Company;
use App\Models\CompanyOrder;
use Illuminate\Http\Request;

class ManageOrderController extends Controller
{
    public function addOrder($type = null)
    {
        $companies = Company::get(['id', 'companyName']);

        if ($type === 'ASK') {
            return view('lc.order.ask', compact('companies'));
        } elseif ($type === 'BID') {
            return view('lc.order.bid', compact('companies'));
        }
        return view('lc.add-order', compact('companies'));
    }

    public function storeOrder(CreateOrderRequest $createOrderRequest)
    {
        (new CompanyOrder())->create($createOrderRequest->validated());
        return redirect()->route('orders');
    }

    public function show($id)
    {
        $order = CompanyOrder::with('company')->findOrFail($id);
        return view('lc.order.show', compact('order'));
    }

    public function edit($id)
    {
        $order = CompanyOrder::with('company')->findOrFail($id);
        $companies = Company::get(['id', 'companyName']);

        if ($order->type === 'ASK') {
            return view('lc.order.ask-edit', compact('order','companies'));
        } elseif ($order->type === 'BID') {
            return view('lc.order.bid-edit', compact('order','companies'));
        }

        return view('lc.order.ask-edit', compact('order','companies'));
    }

    public function update(UpdateOrderRequest $updateOrderRequest, CompanyOrder $order_lc)
    {
        $order_lc->update($updateOrderRequest->validated());
        return redirect()->route('orders');
    }
}
