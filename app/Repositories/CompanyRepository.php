<?php


namespace App\Repositories;

use App\Models\Company as Model;

class CompanyRepository extends CoreRepository
{

    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Model::class;
    }


    public function getAllCompanies()
    {
        return $this->startCondition()->orderByDesc('created_at')->get();
    }
    public function getCompanyWithCategories($id)
    {
        return $this->startCondition()->with('category')->find($id);
    }
}
