<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PublicProfileController extends Controller
{
    //
    public function show(User $user)
    {
        // Logic to retrieve user profile by username
        // For example, you might fetch the user and their posts
      
        $posts = $user->posts()->latest()->paginate(10);

        return view('profile.show', compact('user', 'posts'));
    }
}
