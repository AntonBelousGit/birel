<?php

namespace App\Listeners;

use App\Events\WatchlistNotificationEvent;
use App\Models\Watchlist;
use App\Notifications\OrderUserStatusNotification;
use Illuminate\Support\Arr;
use Notification;

class WatchlistNotificationListener
{
    /**
     * @param WatchlistNotificationEvent $event
     */
    public function handle(WatchlistNotificationEvent $event)
    {
        $watchlist = Watchlist::with('users')->where('company_id',$event->company_id )->whereIn('type',[ucfirst(strtolower($event->type)),'All'])->where('user_id','!=', $event->user->id)->get();
        if ($watchlist) {
           $users = Arr::pluck($watchlist,'users');
           $message = 'At company "'. $event->companyName .'", a new order ('.$event->type.') has been placed.';
           Notification::send($users, new OrderUserStatusNotification($message));
        }
    }
}
