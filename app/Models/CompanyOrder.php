<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyOrder extends Model
{
    use HasFactory;
    use Filterable;


    protected $fillable = [
        'company_id',
        'user_id',
        'date',
        'description',
        'valuation',
        'volume',
        'volume_encode',
        'share_price',
        'share_price_encode',
        'share_number',
        'type',
        'sub_type',
        'deal_structure',
        'share_type',
        'share_type_currency',
        'status',
        'publish_time',
        'user_can_update'
    ];

    protected $dates = [
        'publish_time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function setValuationAttribute($value)
    {
        $this->attributes['valuation'] = $value;
        $this->attributes['valuation_encode'] = encode_bigNumber($value);
    }

    public function setVolumeAttribute($value)
    {
        $this->attributes['volume'] = $value;
        $this->attributes['volume_encode'] = encode_bigNumber($value);
    }

    public function setSharePriceAttribute($value)
    {
        $this->attributes['share_price'] = $value;
        $this->attributes['share_price_encode'] = encode_bigNumber($value);
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value;
        if ($value == 'active') {
            $this->attributes['publish_time'] = now();
        }

    }

    public function getDateAttribute()
    {
        if ($this->publish_time) {
            return $this->publish_time->format('d/m/y');
        }
    }
}
