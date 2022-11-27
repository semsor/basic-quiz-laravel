<x-app-layout>

    {{$quiz}}
    <hr>
    {{$question}}


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




