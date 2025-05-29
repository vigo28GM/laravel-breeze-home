

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <h1>All posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post->id) }}" class="inline-flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400 rounded">Show</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="inline-flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400 rounded">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }} " class="inline-flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400 rounded" method="post">
                        @csrf
                        @Method('DELETE')
                        <button>delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
            </div>
        </div>
    </div>
</x-app-layout>
