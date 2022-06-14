<?php


namespace App\Action\Filter;

use App\Models\CompanyOrder;
use Throwable;

class GetFilteredCompanyOrderAction
{
    public function handle($filter)
    {
        try {
            $companyOrders = CompanyOrder::filter($filter)->get();
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }

        return  $companyOrders;
    }
}
