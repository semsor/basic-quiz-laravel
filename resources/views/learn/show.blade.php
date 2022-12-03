<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$quiz->title}}
        </h2>
    </x-slot>


    <form method="POST" action="{{route('learn.store', [$quiz->id])}}/">
        @csrf

        @foreach ($quiz['questions'] as $question)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 mt-4   sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div class="flex items-center">
                            <fieldset>
                                <legend class="text-lg font-medium text-gray-900 mb-2">
                                    {{ $question->title }}
                                </legend>
                                @foreach ($question['options'] as $option)
                                    <div>
                                        <input type="radio" id="{{$option->id}}" name="{{$question->id}}"
                                               value="{{$option->title}}">
                                        <label for="{{$option->id}}"> {{ $option->title }} </label>
                                    </div>
                                @endforeach
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 mt-4   sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <button
                        class="inline-flex items-center px-4 py-2 bg-white-800 border rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-100 focus:bg-gray-100 active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        type="submit">Save answers
                    </button>
                </div>
            </div>
        </div>
    </form>


</x-app-layout>
