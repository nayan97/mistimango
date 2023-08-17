<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $cats = Category::all();
        $post = Post::latest()-> get();
        return view('admin.pages.post.index',[
                'type'  => 'add',
                'post'  => $post,
                'cats'  => $cats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    { 

             //validation
       $this -> validate ($request,[
        'title'   => 'required'
      ]);
        
        if($request -> hasFile('photo')) {
          $img =$request -> photo;
          $file_name = md5(time() .rand()) .'.'. $img->getClientOriginalExtension();
          $request -> photo -> move('img/post', $file_name);

           //   $img -> move(storage_path('app/public/post/' . $file_name));
        
    }else {
        $file_name = ''; 
    }

               $post = Post::create([

            'admin_id'   => Auth::guard('') -> user() ->id,
            'title'      => $request -> title,
            'category_id'=> $request -> cats,
            'slug'       => Str::slug($request->title),
            'content'    => $request -> content,
            'photo'      => $file_name

        ]);

        return back()->with('success', 'Data add successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   $posts =Post::findOrFail($id);
        $cats = Category::latest()-> get();
        $post = Post::latest()-> get();

        return view('admin.pages.post.index',[
                'type'  => 'edit',
                'post'  => $post,
                'cats'  => $cats,
                'posts' => $posts
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posts =Post::findOrFail($id);
                //validation
                $this -> validate ($request,[
                    'title'   => 'required'
                  ]);
                    
                    if($request -> hasFile('photo')) {
                      $img =$request -> photo;
                      $file_name = md5(time() .rand()) .'.'. $img->getClientOriginalExtension();
                      $request -> photo -> move('img/post', $file_name);
            
                       //   $img -> move(storage_path('app/public/post/' . $file_name));
                    
                }else {
                    $file_name = ''; 
                }
            
                           $posts -> update([
            
                        'admin_id'   => Auth::guard('') -> user() ->id,
                        'title'      => $request -> title,
                        'category_id'=> $request -> cats,
                        'slug'       => Str::slug($request->title),
                        'content'    => $request -> content,
                        'photo'      => $file_name
            
                    ]);
            
                   
                    $posts -> category() -> attach($request->cats);
            
                    return back()->with('success', 'Data add successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts =Post::findOrFail($id);

        $posts ->delete();

        return back()->with('success', 'Data deleted successfuly');

    }
}
