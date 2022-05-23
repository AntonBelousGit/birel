<?php

namespace App\Listeners;

use App\Events\OrderUpdateEvent;

class NewOrderHasBeenModeratedChangeCountOrders
{

    /**
     * Handle the event.
     *
     * @param OrderUpdateEvent $event
     * @return void
     */
    public function handle(OrderUpdateEvent $event)
    {


        $event->user->update(['active_order' => ($event->symbol == '-') ? $event->user->active_order - 1 : $event->user->active_order + 1]);

    }
}
