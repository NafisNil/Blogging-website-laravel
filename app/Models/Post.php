<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    //
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function readTime($wordsPerMinute = 200){
        $words = str_word_count(strip_tags($this->content));
        $minutes = floor($words / $wordsPerMinute);
        return $minutes < 1 ? 1 : $minutes;
    }

    public function imageUrl(){
        if ($this->images) {
            return asset('storage/' . $this->images);
        }
        return null;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    
}
