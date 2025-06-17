<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <h2 class="text-emerald-800 mb-6">Create a new post</h2>
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Image')" />
                        <x-text-input id="title" class="block mt-1 w-full block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" name="images"
                            :value="old('images')" required autofocus autocomplete="username" aria-describedby="file_input_help" />
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        <x-input-error :messages="$errors->get('images')" class="mt-2" />
                            
                    </div>
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Category')" />
                        <select name="category_id" id="category_id" class="block mt-1 w-full block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Content')" />
                        <x-textarea-input id="content" class="block mt-1 w-full" type="text" name="content"
                           required autofocus autocomplete="username" />{{ old('content') }}
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>
                    <x-primary-button>
                        Submit
                    </x-primary-button>
                </form>
            </div>


        </div>
    </div>
</x-app-layout>
