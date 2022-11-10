<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuizController extends Controller
{
    public function index()
    {

        $quizzes = Quiz::all();
        return view('quiz.index', compact('quizzes'));
    }

    public function show(Request $quiz)    {

        $quiz_questions = $quiz->question;
        return view('quiz.show', compact('quiz_questions'));
    }

    public function store(Request $request)
    {

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        Quiz::create($input);

        $quizzes = Quiz::all();
        return view('quiz.index', compact('quizzes'));
    }
}
