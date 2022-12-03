<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearnController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('learn.index', compact('quizzes'));
    }

    public function show($id)
    {
        $quiz = Quiz::find($id);
        $quiz_questions = $quiz->questions;

        foreach ($quiz_questions as $quiz_question) {
            $quiz_question['options'] = QuizQuestion::find($quiz_question['id'])->options;
        }

        return view('learn.show', compact('quiz'));
    }

    public function store(Request $request)
    {

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        Learn::create($input);
        return redirect('/learn/');
    }
}
