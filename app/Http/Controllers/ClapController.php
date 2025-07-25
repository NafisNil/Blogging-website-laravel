<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class ClapController extends Controller
{
    //
    public function clap(Post $post){
        $hasClapped = auth()->user()->hasClapped($post);
        if ($hasClapped) {
            $post->claps()->where('user_id', auth()->id())->delete();
        } else {
            $post->claps()->create([
                'user_id' => auth()->id(),
            ]);
        }
        return response()->json([
            'success' => 'Clap added successfully',
            'claps_count' => $post->claps()->count(),
        ]);
    }
}
