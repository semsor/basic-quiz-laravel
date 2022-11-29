<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use App\Models\QuizQuestionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizQuestionOptionController extends Controller
{
    public function store(Request $request, $quiz, $question)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['quiz_question_id'] = 1;
        $input['is_correct'] = 1;
        QuizQuestionOption::create($input);
        return redirect('/quiz/' . $quiz . "/" . $question);
    }
}
