@props(['user'])
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
<div {{ $attributes }} x-data="{
                        following: {{ $user->isFollowedBy(Auth::user()) ? 'true' : 'false' }},
                        followersCount: {{(int) $user->followers()->count() }},
                        follow() {
                           
                            axios.post('/follow/{{ $user->id }}')
                                .then(response => {
                                    console.log(response.data); 
                                    if (response.data.success) {
                                        console.log('Follow status updated');
                                         this.following = !this.following;
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
                    {{ $slot }}
</div>


