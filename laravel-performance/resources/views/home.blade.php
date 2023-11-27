<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach ($posts as $post)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div>{{ $post->user->name }}</div>
                        <a href="{{ route('posts.show', $post) }}"><h1 class="font-semibold text-xl mt-2">{{ $post->title }}</h1></a>
                        <p class="mt-2">{{ $post->teaser }}</p>
                    </div>
                </div>
            @endforeach

            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
