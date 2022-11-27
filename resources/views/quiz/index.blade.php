<x-app-layout>

    <a href="{{route('quiz.create')}}" class="text-sm text-gray-700 underline">Create quiz</a>

    <ul>
        @foreach ($quizzes as $quiz)
            <li>{{ $quiz}}</li>
        @endforeach
    </ul>

</x-app-layout>

