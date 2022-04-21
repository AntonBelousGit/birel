<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $primaryKey = 'setting_name';


    protected $fillable = [
        'setting_name',
        'attribute_name'
    ];

    protected $casts = [
        'attribute_name' => 'array'
    ];
}
