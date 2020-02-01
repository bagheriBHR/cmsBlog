<?php

namespace App\Http\Controllers\Frontend;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function store(Request $request,$id)
    {
        $post=Post::find($id);
        if($post){
            $comment=new Comment();
            $comment->description = $request->description;
            $comment->post_id = $id;
            $comment->status = 0;
            $comment->save();
            Session::flash('add_comment','نظر شما با موفقیت درج گردید و در انتظار تایید مدیر میباشد.');
        }
        return back();
    }
    public function reply(Request $request)
    {
        $post=Post::find($request->input('post_id'));
        if($post){
            $comment=new Comment();
            $comment->description = $request->description;
            $comment->post_id = $request->input('post_id');
            $comment->parent_id=$request->input('parent_id');
            $comment->status = 0;
            $comment->save();
            Session::flash('add_comment','نظر شما با موفقیت درج گردید و در انتظار تایید مدیر میباشد.');
        }
        return back();
    }
}
