<?php

namespace App\Listeners;

use App\Events\AllUserNotificationEvent;
use App\Models\User;
use App\Notifications\UserNotification;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;

class AllUserNotificationListener implements ShouldQueue
{
    use Queueable;

    public function handle(AllUserNotificationEvent $event)
    {
        $when = Carbon::now()->addSecond();
        $users = User::whereHas('userSettingNotifications', function ($q) {
            $q->where('new_system_message',1);
        })->get();
        Notification::send($users, (new UserNotification($event->message))->delay($when));
    }
}
