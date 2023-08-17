<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat =Category::latest()-> get();

        return view('admin.pages.category.index',[
            'type'   => 'add',
            'cat'    => $cat
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
        Category::create([
            'name'   => $request -> name,
            'slug'   => Str::slug($request -> name)
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
    {   $cats =Category::find($id);
        $cat =Category::latest()-> get();

        return view('admin.pages.category.index',[
            'type'   => 'edit',
            'cat'    => $cat,
            'cats'   => $cats
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {     $Category =Category::find($id);
         $Category->update([
            'name'   => $request -> name,
            'slug'   => Str::slug($request -> name)
        ]);

        return redirect()->back()->with('success', 'Data updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Category =Category::find($id);
        
        $Category->delete();

        return redirect()->back()->with('success', 'Data Deleted successfuly');
    }
}
