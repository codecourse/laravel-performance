<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
        <div class="mt-2">{{ $post->user->name }}</div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 leading-relaxed">
                    {{ $post->body }}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('posts.share', $post) }}" method="post" class="p-6 text-gray-900">
                    @csrf

                    <h1 class="font-semibold text-lg">Share this article by email</h1>

                    <div class="mt-2">
                        <div class="w-full">
                            <x-input-label for="email" :value="__('Email')" class="sr-only" />
                            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" placeholder="someone@somewhere.com" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <x-primary-button class="mt-4">
                            {{ __('Share') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
