<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claps extends Model
{
    //
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
