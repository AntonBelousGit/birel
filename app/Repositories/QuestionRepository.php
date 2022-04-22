<?php


namespace App\Repositories;

use App\Models\Question as Model;

class QuestionRepository extends CoreRepository
{
    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Model::class;
    }


    public function getAllQuestion()
    {
        return $this->startCondition()->orderByDesc('created_at')->with('user')->get();
    }
}
