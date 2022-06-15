<?php

namespace App\Listeners;

use App\Events\SendFormMailEvent;
use App\Models\Setting;
use Mail;

class SendFormMailListener
{

    /**
     * Handle the event.
     *

     * @return void
     */
    public function handle(SendFormMailEvent $event)
    {
        $data = array('name'=>$event->data['name'], 'email'=>$event->data['email'],'msg' => $event->data['msg']);
        $settings = Setting::where('setting_name', 'email')->first();
        Mail::send('admin.emails.mailEvent', $data, function($message) use ($settings) {
            $message->to($settings->attribute_name['email']);
            $message->subject('Feel free to reach out to us.');
        });
    }
}
