<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderUpdateEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $symbol; // - or +
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user,$symbol)
    {
       $this->user = $user;
       $this->symbol = $symbol;
    }
}
