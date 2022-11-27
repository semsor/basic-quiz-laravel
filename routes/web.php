<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizQuiestionController;

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

Route::get('/quiz', [QuizController::class, 'index'])
    ->name('quiz.index');

Route::get('/quiz/{id}', [QuizController::class, 'show'])
    ->name('quiz.show')
    ->where('id', '.*');

Route::get('/quiz-create/', [QuizController::class, 'create'])
    ->name('quiz.create');

Route::post('/quiz-create/', [QuizController::class, 'store'])
    ->name('quiz.store');
