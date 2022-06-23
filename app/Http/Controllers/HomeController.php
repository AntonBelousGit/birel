<?php

namespace App\Http\Controllers;

use App\Models\CompanyOrder;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('lc.home');
    }

    public function orders()
    {
        $orders = CompanyOrder::with('user','company')->where('user_id',Auth::id())->orderByDesc('created_at')->get();
        return view('lc.page-lc-orders',compact('orders'));
    }

    public function update(UserUpdateRequest $request)
    {
        auth()->user()->update($request->validated());
        return redirect()->back()->with('success', 'Profile updated.');
    }

    public function changepass(Request $request)
    {
        $validated = $request->validate([
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        auth()->user()->update(['password' => Hash::make($validated['password'])]);

        return redirect()->back()->with('success', 'password updated.');
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($q) use ($request) {
               return $q->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}
