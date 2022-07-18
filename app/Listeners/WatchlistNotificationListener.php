<?php

namespace App\Listeners;

use App\Events\WatchlistNotificationEvent;
use App\Models\Company;
use App\Models\Watchlist;
use App\Notifications\OrderUserStatusNotification;
use Illuminate\Support\Arr;
use Notification;
use Throwable;

class WatchlistNotificationListener
{
    /**
     * @param WatchlistNotificationEvent $event
     */
    public function handle(WatchlistNotificationEvent $event)
    {
        try {
            $watchlist = Watchlist::with('users.userSettingNotifications')
                ->whereHas('users.userSettingNotifications', function ($q) {
                    $q->where('new_order_subscribe_company', 1);
                })
                ->where('company_id', $event->company->id)
                ->whereIn('type', [ucfirst(strtolower($event->type)), 'All'])
                ->where('user_id', '!=', $event->user->id)
                ->get();

            if ($watchlist) {
                $users = Arr::pluck($watchlist, 'users');
                $message = 'At company "' . $event->company->companyName . '", a new order (' . $event->type . ') has been placed.';
                Notification::send($users, new OrderUserStatusNotification($message));
            }
        } catch (Throwable $exception) {
            report($exception);
        }

        try {

            $watchlist2 = Company::with('orders.user')->whereHas('orders.user.userSettingNotifications', function ($q) {
                $q->where('new_order_company_have_your_order', 1);
            })->find($event->company->id);

            if ($watchlist2) {
                $users = array_unique(Arr::pluck($watchlist2->orders, 'user'));
                $message = 'A new order (' . $event->type . ')  has been added to the company "' . $event->company->companyName . '" with your order';
                Notification::send($users, new OrderUserStatusNotification($message));
            }
        } catch (Throwable $exception) {
            report($exception);
        }


    }
}
