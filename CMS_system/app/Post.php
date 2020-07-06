<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
        return $this->belongsTo(Post::class, 'category_id');
    }
}
