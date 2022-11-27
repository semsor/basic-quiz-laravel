<x-app-layout>
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

    <h2>Question add</h2>

    <form method="POST" action="{{route('question.store', $quiz->id)}}/">
        @csrf
        <label>Title</label>
        <input type="text" name="title">
        <label>Detail</label>
        <input type="text" name="detail">
        <button type="submit">Save</button>
    </form>

</x-app-layout>




