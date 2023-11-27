@props(['post'])

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <div>{{ $post->user->name }}</div>
        <a href="{{ route('posts.show', $post) }}"><h1 class="font-semibold text-xl mt-2">{{ $post->title }}</h1></a>
        <p class="mt-2">{{ $post->teaser }}</p>
    </div>
</div>
