<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quiz.index', compact('quizzes'));
    }

    public function show($id)
    {
        $quiz = Quiz::find($id);
        $quiz_questions = $quiz->question;

        $quiz_questions_options = [];

        foreach ($quiz_questions as $quiz_question) {
            $quiz_questions_options = DB::table('quiz_question_options')
                ->where('question_id', $quiz_question['id']);
        }

        dd($quiz_questions_options);

        return view('quiz.show', compact('quiz', 'quiz_questions', 'quiz_questions_options'));
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
