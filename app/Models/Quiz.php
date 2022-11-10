<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'detail', 'user_id'
    ];

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class,'quiz_id', 'id');
    }
}
