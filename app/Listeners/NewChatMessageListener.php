<?php

namespace App\Listeners;

use App\Events\NewChatMessageEvent;
use App\Models\User;
use App\Notifications\UserNotification;
use Notification;
use Throwable;

class NewChatMessageListener
{
    public function handle(NewChatMessageEvent $event)
    {
        try {
            $user_to = User::with('userSettingNotifications')->find($event->user_id);
            if ($user_to->userSettingNotifications->new_message == 1) {

                $message = 'new message from ' . auth()->user()->name;
                Notification::send($user_to, (new UserNotification($message)));
            }
        } catch (Throwable $exception) {
            report($exception);
        }
    }
}
