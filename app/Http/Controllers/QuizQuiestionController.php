<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizQuiestionController extends Controller
{
    public function store(Request $request)
    {

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        QuizQuestion::create($input);

        $quizzes = Quiz::all();
        return view('quiz.index', compact('quizzes'));
    }
}
