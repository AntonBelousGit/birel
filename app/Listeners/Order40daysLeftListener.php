<?php

namespace App\Listeners;

use App\Events\Order40daysLeftEvent;
use App\Notifications\UserNotification;
use Notification;

class Order40daysLeftListener
{
    public function handle(Order40daysLeftEvent $event)
    {
        foreach ($event->order as $order) {

            $message ='Your order on (' . $order->company->companyName . ') will be deactivated and moved to orders history after 5 days. You can extend it here ( <a href="/orders">link</a> ) or in my orders menu.';
            Notification::send($order->user, (new UserNotification($message)));
        }
    }
}
