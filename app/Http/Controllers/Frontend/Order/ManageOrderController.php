<?php

namespace App\Http\Controllers\Frontend\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageOrderController extends Controller
{
    public function addOrder($type = null)
    {
        if ($type === 'ASK') {
            return view('lc.add-order.ask');
        } elseif ($type === 'BID') {
            return view('lc.add-order.bid');
        }
        return view('lc.add-order');
    }
}
