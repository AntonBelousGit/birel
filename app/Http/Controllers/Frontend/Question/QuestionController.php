<?php

namespace App\Http\Controllers\Frontend\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\Question\FrontendQuestionRequest;
use App\Models\Question;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param FrontendQuestionRequest $request
     * @return RedirectResponse
     */
    public function __invoke(FrontendQuestionRequest $request)
    {
        $question = $request->validated();
        (new Question())->create($question + ['user_id'=> auth()->id()]);
        return back();
    }
}
