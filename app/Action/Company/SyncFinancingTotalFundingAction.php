<?php

namespace App\Action\Company;

use Throwable;

class SyncFinancingTotalFundingAction
{
    public function handle($company)
    {
        try {
           $new_total_founding =  $company->finance()->sum('raised_to_date');
           $company->update(['total_funding'=>encode_bigNumber($new_total_founding),'total_funding_decode'=> $new_total_founding]);
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }
    }

}

