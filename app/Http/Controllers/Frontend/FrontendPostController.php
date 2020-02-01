<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class FrontendPostController extends Controller
{
    public function show($slug)
    {
        $post=Post::with(['photo','category','user',
            'comments'=>function($q){
            $q->where('status',1)
                ->where('parent_id',null);
            },'comments.replies'=>function($q){
            $q->where('status',1);
            }])
            ->where('slug',$slug)->first();
        return view('frontend.post.show',compact(['post']));
    }
    public function all()
    {
        $posts=Post::with(['photo','category','user'])->get();
        return view('frontend.post.all',compact(['posts']));
    }

    public function searchTitle(Request $request)
    {
        $query=$request->title;
        $posts=Post::with(['photo','category','user'])
            ->where('title','like','%' . $query . '%')
            ->orderBy('created_at','desc')
            ->where('status',1)
            ->get();
        return view('frontend.post.search',compact(['posts','query']));
    }
}
