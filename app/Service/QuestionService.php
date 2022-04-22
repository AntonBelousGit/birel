<?php


namespace App\Service;

use App\Repositories\QuestionRepository;
use Throwable;

class QuestionService
{
    protected $questionRepository;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function getAllQuestion()
    {
       return $this->questionRepository->getAllQuestion();
    }

    public function update($request, $question)
    {
        try {
            $question->update($request);
        }
        catch (Throwable $e) {
            report($e);
            abort(500);
        }
    }

    public function delete($question)
    {
        try {
            $question->delete();
        }
        catch (Throwable $e) {
            report($e);
            abort(500);
        }
    }

}
