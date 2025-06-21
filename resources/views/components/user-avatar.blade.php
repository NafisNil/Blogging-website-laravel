@props(['user', 'size' => 'w-16 h-16'])<!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->

@if ($user->image)
    <img src="{{ Storage::url($user->image) }}" alt="{{ $user->name }}"
        class="{{ $size }} rounded-full object-cover mb-2">
@else
    <img src="{{ asset('avatars.jpeg') }}" alt="dummy avatars" class="{{ $size }} rounded-full object-cover mb-2">
@endif
