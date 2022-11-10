@extends('layouts.app')
{{$quiz}}
<h2>{{$quiz->title}}</h2>
@foreach ($quiz['questions'] as $question)
    <fieldset>
        <legend>{{ $question->title }}</legend>
        @foreach ($question['options'] as $option)
            <div>
                <input type="radio" id="{{$option->id}}" name="{{$question->id}}" value="{{$option->title}}">
                <label for="{{$option->id}}"> {{ $option->title }} </label>
            </div>
        @endforeach
    </fieldset>
@endforeach



