<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class FollowerController extends Controller
{
    //
    public function followUnfollow(User $user)
    {
        // Logic to follow a user
       $user->followers()->toggle(auth()->user());
        
        return response()->json([
            // 'message' => $user->followers()->where('follower_id', auth()->id())->exists() ? 'Followed' : 'Unfollowed',
            'success' => true,
            'followersCount' => $user->followers()->count(),
        ]);

    }
}
