<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts=Post::with(['photo','user','category'])
            ->orderBy('created_at','desc')
            ->where('status',1)
            ->paginate(4);
        $categories=Category::all();
        return view('frontend.main.index',compact(['posts']));
    }
}
