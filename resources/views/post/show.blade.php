<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <h1 class="text-emerald-800 mb-6 text-5xl">{{ $post->title }}</h1>
                <div class="flex gap-4">
                    @if ($post->user->image)
                        <img src="{{ Storage::url($post->user->image)}}" alt="{{ $post->user->name }}"
                            class="w-16 h-16 rounded-full object-cover mb-2">
                    @else
                        <img src="{{ asset('avatars.jpeg') }}" alt="dummy avatars"  class="w-16 h-16 rounded-full object-cover mb-2">
                    @endif
                    <div>
                            <h3>{{$post->user->name}}</h3>
                            <div class="flex gap-2">
                                
                            </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
