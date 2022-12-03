<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizQuestionController;
use App\Http\Controllers\QuizQuestionOptionController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/learn', [LearnController::class, 'index'])
    ->name('learn.index');

Route::get('/learn/result/', [LearnController::class, 'result'])
    ->name('learn.result');

Route::get('/learn/{quiz}/', [LearnController::class, 'show'])
    ->name('learn.show');

Route::post('/learn/{quiz}/', [LearnController::class, 'store'])
    ->name('learn.store');

Route::get('/quiz', [QuizController::class, 'index'])
    ->name('quiz.index');

Route::get('/quiz/create/', [QuizController::class, 'create'])
    ->name('quiz.create');

Route::post('/quiz/create/', [QuizController::class, 'store'])
    ->name('quiz.store');

Route::get('/quiz/{quiz}/', [QuizController::class, 'show'])
    ->name('quiz.show');

Route::post('/quiz/{quiz}/', [QuizQuestionController::class, 'store'])
    ->name('question.store');

Route::get('/quiz/{quiz}/{question}/', [QuizQuestionController::class, 'show'])
    ->name('question.show');

Route::post('/quiz/{quiz}/{question}/', [QuizQuestionOptionController::class, 'store'])
    ->name('option.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
