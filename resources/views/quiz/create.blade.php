<x-app-layout>


    <form method="POST" action="{{route('quiz.store')}}/">
        @csrf
        <label>Title</label>
        <input type="text" name="title">
        <label>Detail</label>
        <input type="text" name="detail">
        <button type="submit">Save</button>
    </form>

</x-app-layout>
