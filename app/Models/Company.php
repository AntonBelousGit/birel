<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model
{
    use HasFactory;

    protected $with = ['category'];

    protected $fillable = [
        'companyName',
        'companyAddress',
        'image',
        'description',
        'valuation',
        'status',
        'founded',
        'total_funding',
        'total_funding_decode'
    ];

    protected $dates = ['founded'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(CompanyOrder::class,'company_id')->where('status','active');
    }

    public function wali()
    {
        return $this->belongsTo(Watchlist::class, 'id', 'company_id')->where('user_id', Auth::user()->id);
    }

    public function finance()
    {
        return $this->hasMany(CompanyFinance::class,'company_id');
    }

    public function scopeStatus($query)
    {
        $query->where('status', 1);
    }

    public function setValuationAttribute($value)
    {
        $this->attributes['valuation'] = $value;
        $this->attributes['valuation_encode'] = encode_bigNumber($value);
    }
}
