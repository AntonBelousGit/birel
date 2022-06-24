<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class Order30daysLeftEvent
{
    use Dispatchable;

    public function __construct(public $order)
    {
    }
}
