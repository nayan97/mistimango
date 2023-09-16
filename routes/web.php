<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CategoryController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// comments and reply route

Route::post('/comment',[CommentController::class, 'store'])->name('comment.add');
Route::post('/reply',[CommentController::class, 'replyStore'])->name('reply.add');

//hompage route

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'home'])->name('home');
Route::get('/blog{slug}',[HomeController::class, 'showSingleBlog'])->name('single.blog');

//admin page route

Route::resource('/category', CategoryController::class);
Route::resource('/post', PostController::class);


// relations route


Route::get('phones',[PhoneController::class, 'index']);