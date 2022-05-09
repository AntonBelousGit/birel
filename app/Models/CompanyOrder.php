<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'user_id',
        'date',
        'description',
        'valuation',
        'volume',
        'share_price',
        'share_price_decode',
        'share_number',
        'type',
        'sub_type',
        'deal_structure',
        'share_type',
        'share_type_currency',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
