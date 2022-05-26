<?php


namespace App\Repositories;

use App\Models\User as Model;

class UserTypeRepository extends CoreRepository
{

    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllUserTypes()
    {
        return $this->startCondition()->toBase()->get(['id', 'name','type','surname','email','active_order']);
    }
}
