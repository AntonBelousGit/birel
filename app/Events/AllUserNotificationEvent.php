<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class AllUserNotificationEvent
{
    use Dispatchable;

    public function __construct(public $message)
    {
    }
}
