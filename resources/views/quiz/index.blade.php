@extends('layouts.app')

<a href="{{ url('/quiz-create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Create quiz</a>

{{$quizzes}}

