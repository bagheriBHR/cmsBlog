<?php

namespace App;

use App\Http\Controllers\admin\CommentController;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
