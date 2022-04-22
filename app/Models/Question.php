<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'theme', 'status','user_id'];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
