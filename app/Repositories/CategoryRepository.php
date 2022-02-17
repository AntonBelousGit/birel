<?php


namespace App\Repositories;

use App\Models\Category as Model;

class CategoryRepository extends CoreRepository
{
    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Model::class;
    }


    public function getAllCategories()
    {
        return $this->startCondition()->orderByDesc('created_at')->get();
    }
}
