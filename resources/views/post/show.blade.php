<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-9">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <h1 class="text-emerald-800 mb-6 text-2xl">{{ $post->title }}</h1>
                <div class="flex gap-4">
                    <x-user-avatar :user="$post->user"  />
                    <div>
                        <div class="flex gap-2">
                            <a href="{{ route('profile.show', $post->user) }}" class="hover:underline">{{ $post->user->name }}</a>
                            &middot;
                            <a href="" class=""></a>
                        </div>

                        <div class="flex gap-2">
                            <span class="text-gray-400">{{ $post->readTime() }} min Read</span>
                            &middot;
                            <span>{{ $post->created_at->format('M d, Y') }}</span>
                        </div>

                        <x-clap-button :post="$post" />

                        <div class="mt-6">
                            <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}"
                                class="w-full h-64 object-cover rounded-lg mt-4">
                            <div class="mt-4">
                                {{ $post->content }}
                            </div>
                        </div>

                        <div class="mt-4">
                            <span class="px-4 bg-blue-400 rounded-lg">{{ $post->category->name }}</span>
                        </div>

                         <x-clap-button :post="$post" />

                    </div>

                </div>
            </div>


        </div>
    </div>
</x-app-layout>
