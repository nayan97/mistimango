<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        // $post =Post::where('slug', $request->post_slug)->where('status', '0')->first();

        // dd($post);

        // if ($post) {
        //     Comment::create([
        //         'post_id' => $post->id,
        //         'admin_id' =>Auth::user()->id,
        //         'comments' => $request->comments
        //   ]);
        // } else {
            
        // }
        // return back();

        if (Auth::id()) {
            $comment = new Comment();
            $comment->comments = $request->comments;
            $comment->admin_id = Auth::user()->id;
            $comment->post_id = $request->post_id;
            $comment->save();
    
    
            session()->flash("message", "successfully done");
    
            return back();
            
        }else {
            return redirect('login');
        }
       
      
    }


    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->comments = $request->comments;
        $reply->admin_id = Auth::user()->id;
        $reply->post_id = $request->post_id;
        $reply->perent_id = $request->get('comment_id');
        $reply->save();


        session()->flash("message", "successfully done");

        return back();
        
      
    }
}
