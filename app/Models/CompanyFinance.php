<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFinance extends Model
{
    use HasFactory;

    protected $table = 'company_finances';

    protected $fillable = [
        'date',
        'type_currency',
        'transaction_name',
        'amount_raised',
        'amount_raised_encode',
        'raised_to_date',
        'raised_to_date_encode',
        'issue_price',
        'post_money_valuation',
        'post_money_valuation_encode',
        'key_investors',
        'company_id'
    ];

    public function setRaisedToDateAttribute($value)
    {
        $this->attributes['raised_to_date'] = $value;
        $this->attributes['raised_to_date_encode'] = encode_bigNumber($value);
    }

    public function setAmountRaisedAttribute($value)
    {
        $this->attributes['amount_raised'] = $value;
        $this->attributes['amount_raised_encode'] = encode_bigNumber($value);
    }

    public function setPostMoneyValuationAttribute($value)
    {
        $this->attributes['post_money_valuation'] = $value;
        $this->attributes['post_money_valuation_encode'] = encode_bigNumber($value);
    }

    protected $dates = ['date'];

    public function info()
    {
        return $this->hasOne(CompanyFinanceInfo::class,'company_finance_id');
    }
}
