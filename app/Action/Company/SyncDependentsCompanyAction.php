<?php

namespace App\Action\Company;

use Throwable;

class SyncDependentsCompanyAction
{
    public function handle($company,$data)
    {
        try {
            $company->category()->sync($data);
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }
    }

}

