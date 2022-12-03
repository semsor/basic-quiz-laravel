<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Result') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @foreach ($results as $result)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 mb-4   sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <p>{{ $result}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</x-app-layout>

