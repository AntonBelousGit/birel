<?php


namespace App\Repositories;

use App\Models\User as Model;

class UserRepository extends CoreRepository
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
    public function getUsersWithRole()
    {
        return $this->startCondition()->with('role')->orderByDesc('created_at')->get();
    }

    public function getUsersWithRoleByID($id)
    {
        return $this->startCondition()->with('role')->where('id', $id)->first();
    }
}
