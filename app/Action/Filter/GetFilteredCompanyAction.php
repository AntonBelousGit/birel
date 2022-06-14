<?php


namespace App\Action\Filter;

use App\Models\Company;
use Throwable;

class GetFilteredCompanyAction
{
    public function handle($filter)
    {
        try {
            $companyOrders = Company::filter($filter)->with('category','wali')->withCount('orders')->status()->orderByDesc('created_at')->paginate(16,['*'],'companies')->withQueryString();
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }

        return  $companyOrders;
    }
}
