<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestionOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'detail', 'is_correct', 'quiz_question_id', 'user_id'
    ];

    public function question() {
        return $this->belongsTo(QuizQuestion::class);
    }
}
