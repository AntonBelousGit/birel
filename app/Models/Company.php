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
}
