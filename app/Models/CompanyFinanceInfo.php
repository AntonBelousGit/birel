<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFinanceInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_per_share',
        'type_currency',
        'liquidation_pref_order',
        'dividend_rate',
        'investors',
        'shares_outstanding',
        'liquidation_pref_as_multiplier',
        'cumulative',
        'percent_shares_outstanding',
        'conversion_rate',
        'participating',
        'participation_cap',
        'company_finance_id'
    ];

    public function companyFinance()
    {
        return $this->belongsTo(CompanyFinance::class);
    }
}
