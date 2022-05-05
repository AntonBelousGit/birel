<?php

namespace App\Http\Controllers\Frontend\Order;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class ManageOrderController extends Controller
{
    public function addOrder($type = null)
    {
        $companies = Company::get(['id','companyName']);

        if ($type === 'ASK') {
            return view('lc.add-order.ask',compact('companies'));
        } elseif ($type === 'BID') {
            return view('lc.add-order.bid',compact('companies'));
        }
        return view('lc.add-order',compact('companies'));
    }
}
