<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class NewChatMessageEvent
{
    use Dispatchable;

    public function __construct(public $user_id)
    {
    }
}
