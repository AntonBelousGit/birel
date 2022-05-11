<?php


namespace App\Repositories;

use App\Models\CompanyOrder as Model;

class CompanyOrderRepository extends CoreRepository
{

    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllCompaniesOrders()
    {
        return $this->startCondition()->with('user','company')->get();
    }

}
