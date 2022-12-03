<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id', 'quiz_question_id', 'quiz_question_option_id', 'is_correct', 'user_id'
    ];
}
