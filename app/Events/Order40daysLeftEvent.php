<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class Order40daysLeftEvent
{
    use Dispatchable;

    public function __construct(public $order)
    {
    }
}
