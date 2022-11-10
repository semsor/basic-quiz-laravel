<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Quiz::create([
            'title' => 'Quiz',
            'detail' => 'Quiz',
            'user_id' => 1,
        ]);

        \App\Models\QuizQuestion::create([
            'title' => 'QuizQuestion',
            'detail' => 'QuizQuestion',
            'quiz_id' => 1,
            'user_id' => 1,
        ]);

        \App\Models\QuizQuestionOption::create([
            'title' => 'QuizQuestionOption',
            'detail' => 'QuizQuestionOption',
            'quiz_question_id' => 1,
            'is_correct' => true,
            'user_id' => 1,
        ]);
    }
}
