<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class OrderUserStatusEvent
{
    use Dispatchable;

    public function __construct(public $user, public $message)
    {
    }
}
