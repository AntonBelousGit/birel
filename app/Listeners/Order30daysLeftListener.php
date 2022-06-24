<?php

namespace App\Listeners;

use App\Events\Order30daysLeftEvent;
use App\Notifications\UserNotification;
use Notification;

class Order30daysLeftListener
{
    public function handle(Order30daysLeftEvent $event)
    {
        foreach ($event->order as $order) {

            $message ='Your order on (' . $order->company->companyName . ') will be deactivated and moved to orders history after 15 days. You can extend it here ( <a href="/orders">link</a> ) or in my orders menu.';
            Notification::send($order->user, (new UserNotification($message)));
        }
    }
}
