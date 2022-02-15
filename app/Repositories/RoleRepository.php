<?php


namespace App\Repositories;

use App\Models\Role as Model;

class RoleRepository extends CoreRepository
{

    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Model::class;
    }


    public function getAllRoles()
    {
        return $this->startCondition()->toBase()->get(['id', 'name']);
    }

}
