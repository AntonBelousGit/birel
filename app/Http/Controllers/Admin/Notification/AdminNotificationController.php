<?php

namespace App\Http\Controllers\Admin\Notification;

use App\Events\AllUserNotificationEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNotificationController extends Controller
{
    public function index()
    {
        return view('admin.notification.index');
    }

    public function sendNotification(Request $request)
    {
        $data = $request->validate(['message'=>'required']);
        event(new AllUserNotificationEvent($data['message']));
        return back()->with('status', 'Notification send!');
    }
}
