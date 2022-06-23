<?php

namespace App\Listeners;

use App\Events\OrderUserStatusEvent;
use App\Notifications\OrderUserStatusNotification;
use Notification;

class OrderUserStatusListener
{
    public function handle(OrderUserStatusEvent $event)
    {
        Notification::send($event->user, new OrderUserStatusNotification($event->message));
    }
}
