<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Comment;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;

class CommentController extends Controller
{
    public function store($id)
    {
        $post = Post::find($id);
        Comment::create([
'body'=> request('body'),
'post_id'=> $post->id,
'user_id'=> Auth::user()->id
        ]);
        return back();
    }
}
