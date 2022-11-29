<x-app-layout>

    {{$quiz}}
    <hr>
    {{$question}}
    <hr>
    {{$options}}

    <hr>

    <fieldset>

        @foreach ($options as $option)
            <div>
                <input type="radio" id="{{$option->id}}" name="{{$question->id}}" value="{{$option->title}}">
                <label for="{{$option->id}}"> {{ $option->title }} </label>
            </div>
        @endforeach
    </fieldset>

    <form method="POST" action="{{route('option.store', [$quiz->id, $question->id])}}/">
        @csrf
        <label>Title</label>
        <input type="text" name="title">
        <label>Detail</label>
        <input type="text" name="detail">
        <label>Correct</label>
        <input type="checkbox" name="is_correct">
        <button type="submit">Save</button>
    </form>

</x-app-layout>




