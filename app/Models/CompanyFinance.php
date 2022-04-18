<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFinance extends Model
{
    use HasFactory;

    protected $table = 'company_finances';

    protected $fillable = ['date','transaction_name','amount_raised','raised_to_date','issue_price','post_money_valuation','key_investors','company_id'];

    protected $dates = ['date'];

    public function info()
    {
        return $this->hasOne(CompanyFinanceInfo::class,'company_finance_id');
    }
}
