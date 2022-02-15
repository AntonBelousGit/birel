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
    public function getUsersWithRoleAndType()
    {
        return $this->startCondition()->with('role', 'user_type')->orderByDesc('created_at')->get();
    }

    public function getUsersWithRoleAndTypeByID($id)
    {
        return $this->startCondition()->with('role', 'user_type')->where('id', $id)->first();
    }
}
