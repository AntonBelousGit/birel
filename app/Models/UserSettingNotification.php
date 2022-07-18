<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSettingNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'new_message',
        'new_order_subscribe_company',
        'new_order_company_have_your_order',
        'new_system_message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
