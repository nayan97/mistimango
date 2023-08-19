<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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