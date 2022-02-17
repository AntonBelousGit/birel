<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
      'companyName',
      'companyAddress',
      'image',
      'description',
      'valuation',
      'status',
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
