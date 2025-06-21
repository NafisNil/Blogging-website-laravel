<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex">
                    <div class="flex-1 pr-8">
                        <h2 class="text-4xl">{{ $user->name }}</h2>
                        <div class="mt-6 ">
                            @forelse($posts as $post)
                                <x-post-item :post="$post" />
                            @empty
                                <div class="text-center text-gray-500">
                                    <p>No posts available.</p>
                                </div>
                            @endforelse
                        </div>

                    </div>
                    <div x-data="{
                        following: {{ $user->isFollowedBy(Auth::user()) ? 'true' : 'false' }},
                        followersCount: {{(int) $user->followers()->count() }},
                        follow() {
                            this.following = !this.following;
                            axios.post('/follow/{{ $user->id }}')
                                .then(response => {
                                    console.log(response.data); 
                                    if (response.data.success) {
                                        console.log('Follow status updated');
                                        this.followersCount = response.data.followersCount;
                                    } else {
                                        console.error('Error updating follow status');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                });
                        }
                    }" class="w-[320px] border-1">


                        <x-user-avatar :user="$user" />
                        <h3>{{ $user->name }}</h3>
                        <p class="text-gray-200"> <span x-text="followersCount" wire:ignore></span> followers </p>
                        <p>
                            {{ $user->bio ?? 'No bio available.' }}
                        </p>
                        <div class="mt-4  ">
                            @auth
                                @if (Auth::user()->id !== $user->id)
                                    <button @click="follow()"
                                        class="text-white px-4 py-2 rounded-lg transition duration-200"
                                        x-text="following ? 'Unfollow' : 'Follow'"
                                        :class="following ? 'bg-red-500 hover:bg-red-600' : 'bg-blue-500 hover:bg-blue-600'">
                                    </button>
                                @endif
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
