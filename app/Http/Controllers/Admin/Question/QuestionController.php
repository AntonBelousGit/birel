<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\Question\AdminQuestionRequest;
use App\Models\Question;
use App\Service\QuestionService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{


    protected $questionService;


    public function __construct( QuestionService $questionService)
    {
        $this->questionService = $questionService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $questions = $this->questionService->getAllQuestion();
        return view('admin.question.index',compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Question $question
     * @return View
     */
    public function edit(Question $question)
    {
        return view('admin.question.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdminQuestionRequest $request
     * @param Question $question
     * @return RedirectResponse
     */
    public function update(AdminQuestionRequest $request, Question $question)
    {
        $this->questionService->update($request->validated(),$question);
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Question $question
     * @return RedirectResponse
     */
    public function destroy(Question $question)
    {
        $this->questionService->delete($question);
        return redirect()->route('question.index');
    }
}
