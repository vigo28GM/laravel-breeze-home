<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div>
    <a href="{{ route('posts.index', $post->id) }}" class="inline-flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400 rounded">return to start</a>
  <h2 class="text-3xl font-bold text-gray-900 mb-4">
   tituls: {{ $post->title }}
  </h2>
  <p class="text-gray-700 text-lg leading-relaxed">
  teksts:  {{ $post->content }}
  </p>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
