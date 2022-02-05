<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Like;
use App\Post;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
class PostController extends Controller
{
    public function index(){
      $posts = Post::orderBy('created_at', 'desc')->get();
        return view('utilisateurs/organiser', ['posts' => $posts]);
    }
    public function like(Request $request)
    {
        $like_s=$request->like_s;
        $post_id=$request->post_id;
        $change_like=0;
        $like = DB::table('likes')
        ->where('post_id', $post_id)
        ->where('user_id', Auth::user()->id)->first();
        if(!$like)
        {
            $new_like = new Like;
            $new_like->post_id = $post_id;
            $new_like->user_id = Auth::user()->id;
            $new_like->like = 1;
            $new_like->save();
        $is_like = 1;
        }
        elseif ($like->like == 1)
        {
            DB::table('likes')  ->where('post_id', $post_id)
            ->where('user_id', Auth::user()->id)
            ->delete();
            $is_like = 0;
        }
        elseif ($like->like == 0)
        {
            DB::table('likes')  ->where('post_id', $post_id)
            ->where('user_id', Auth::user()->id)
            ->update(['like' => 1]);
            $is_like = 1;
            $change_like =1;
        }
       $response= array(
           'is_like' => $is_like,
           'change_like'=>$change_like,
       );
        return response()->json($response, 200);
      }


      public function dislike(Request $request)
      {
          $like_s=$request->like_s;
          $post_id=$request->post_id;
          $change_dislike =0;
          $dislike = DB::table('likes')
          ->where('post_id', $post_id)
          ->where('user_id', Auth::user()->id)->first();
          if(!$dislike)
          {
              $new_like = new Like;
              $new_like->post_id = $post_id;
              $new_like->user_id = Auth::user()->id;
              $new_like->like = 0;
              $new_like->save();
          $is_dislike = 1;
          }
          elseif ($dislike->like == 0)
          {
              DB::table('likes')  ->where('post_id', $post_id)
              ->where('user_id', Auth::user()->id)
              ->delete();
              $is_dislike = 0;
          }
          elseif ($dislike->like == 1)
          {
              DB::table('likes')  ->where('post_id', $post_id)
              ->where('user_id', Auth::user()->id)
              ->update(['like' => 0]);
              $is_dislike = 1;
              $change_dislike =1;
          }
         $response= array(
             'is_dislike' => $is_dislike,
             'change_dislike' =>$change_dislike,
         );
          return response()->json($response, 200);
        }
    public function store(Request $request)
    {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if (!$post) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('post_id', $post_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }

        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;

        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }
    public function store_post(Request $request)
    {

        $post = new Post();
        $post->title = $request->title;
        $post->body= $request->body;

$post->user_id=Auth::user()->id;

        $post->save();

        return redirect('/utilisateurs/organiser')
            -> with("success","post ajouté avec succés");

    }
}
