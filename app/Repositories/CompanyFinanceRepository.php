<?php


namespace App\Repositories;

use App\Models\CompanyFinance as Model;

class CompanyFinanceRepository extends CoreRepository
{

    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllFinancesInfo($id)
    {
        return $this->startCondition()->where('company_id',$id)->with('info')->get();
    }

}
