<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Learn') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @foreach ($quizzes as $quiz)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 mb-4   sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <p>{{ $quiz}}</p>
                        <div class="flex items-center mt-2">
                            <a href="/learn/{{$quiz->id}}"
                               class="inline-flex items-center px-4 py-2 bg-white-800 border rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-100 focus:bg-gray-100 active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Learn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</x-app-layout>

