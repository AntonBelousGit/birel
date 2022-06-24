<?php

namespace App\Providers;

use App\Events\AllUserNotificationEvent;
use App\Events\Order30daysLeftEvent;
use App\Events\Order40daysLeftEvent;
use App\Events\OrderUpdateEvent;
use App\Events\OrderUserStatusEvent;
use App\Events\SendFormMailEvent;
use App\Listeners\AllUserNotificationListener;
use App\Listeners\NewOrderHasBeenModeratedChangeCountOrders;
use App\Listeners\Order30daysLeftListener;
use App\Listeners\Order40daysLeftListener;
use App\Listeners\OrderUserStatusListener;
use App\Listeners\SendFormMailListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        OrderUpdateEvent::class => [
            NewOrderHasBeenModeratedChangeCountOrders::class
        ],
        SendFormMailEvent::class => [
            SendFormMailListener::class
        ],
        OrderUserStatusEvent::class => [
            OrderUserStatusListener::class,
        ],
        AllUserNotificationEvent::class => [
            AllUserNotificationListener::class,
        ],
        Order30daysLeftEvent::class => [
            Order30daysLeftListener::class,
        ],
        Order40daysLeftEvent::class => [
            Order40daysLeftListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
