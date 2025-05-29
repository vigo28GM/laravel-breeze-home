<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Create post</h1>
    <br>
    <form action="/posts" method="post">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="Create" class="inline-flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400 rounded">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </form>
            </div>
        </div>
    </div>
</x-app-layout>
