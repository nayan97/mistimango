<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        $usertype=Auth::user() -> usertype;
        if ($usertype =='admin') {
            return view('admin.pages.dashboard');
        }else{
            return view('frontend.homepage');
        }
    }

    public function index(){
         return view('frontend.homepage');
    }
    

    public function showSingleBlog($slug) {
     
        // $comment =Comment::where('parent_id',NULL)->get();
        // $comment =Comment::all();
        // $reply =Comment::where('perent_id', '0' )->get();

        $post=Post::with('comments')->where('slug',$slug) ->first();

         return view('frontend.singleblog', [
         'post'    => $post
         ]);


    }


}
