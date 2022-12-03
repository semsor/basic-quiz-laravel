<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\QuizQuestionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizQuestionController extends Controller
{
    public function show($quiz, $question)
    {
        $quiz = Quiz::find($quiz);
        $question = QuizQuestion::find($question);
        $options = QuizQuestionOption::where('quiz_question_id', $question->id)->get();
        return view('quiz.question', compact('quiz', 'question', 'options'));
    }

    public function store(Request $request, $quiz_id)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['quiz_id'] = $quiz_id;
        QuizQuestion::create($input);

        return redirect('/quiz/' . $quiz_id);
    }
}
