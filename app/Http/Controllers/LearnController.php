<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Learn;
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

    public function result()
    {
        $results = Learn::all();
        return view('learn.result', compact('results'));
    }

    public function store(Request $request)
    {

        $input = $request->all();
        $input['quiz_id'] = 1;
        $input['quiz_question_id'] = 1;
        $input['quiz_question_option_id'] = 1;
        $input['is_correct'] = 1;
        $input['user_id'] = Auth::user()->id;
        Learn::create($input);
        return view('learn.result');
    }
}
