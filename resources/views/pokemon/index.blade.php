@extends('layouts.app')

@section('conteudo')
<div class="flex flex-col items-center bg-gray-100 dark:bg-gray-900 py-8 px-6">
    <div class="max-w-sm w-full">
        @foreach($pokemon as $entity)
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mb-4">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">{{ $entity->name }}</h3>
                <p class="text-sm text-gray-700 dark:text-gray-300">Type: {{ $entity->type }}</p>
                <p class="text-sm text-gray-700 dark:text-gray-300 mb-4">Strength: {{ $entity->strength }}</p>

                <div class="flex justify-between">
                    <a href="{{ url('pokemon/'.$entity->id.'/edit') }}" class="text-blue-500 hover:text-blue-700 font-medium text-sm">Edit</a>
                    <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 font-medium text-sm">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

