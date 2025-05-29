<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <h1 class="font-semibold text-xl text-gray-800 leading-tight">Edit post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br>
        <input type="submit" value="Update" class="inline-flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400 rounded">
    </form>
            </div>
        </div>
    </div>
    </x-app-layout>
