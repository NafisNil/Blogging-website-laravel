<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    < x-category-tabs/>

                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @forelse($posts as $post)
                        <x-post-item :post="$post" />
                    @empty
                        <div class="text-center text-gray-500">
                            <p>No posts available.</p>
                        </div>
                    @endforelse

          
                      {{ $posts->links() }}
                </div>
              
            </div>
        </div>
    </div>
</x-app-layout>
