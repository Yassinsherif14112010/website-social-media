<?php
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\UserController;

Route::get('/posts', [Postcontroller::class, 'index'])->name('posts.index');

Route::get('/', function () {
    $posts = Post::all();
    return view('home', compact('posts'));
});

Route::get('/posts/create', [Postcontroller::class, 'create'])->name('posts.create');

Route::post('/posts', [Postcontroller::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [Postcontroller::class, 'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [Postcontroller::class, 'edit'])->name('posts.edit');

Route::put('/posts/{post}', [Postcontroller::class, 'update'])->name('posts.update');

Route::delete('/posts/{post}', [Postcontroller::class, 'destroy'])->name('posts.destroy');

Route::get('/home', [Postcontroller::class, 'home'])->name('home');
Route::resource('users',UserController::class);
Route::get('users/{id}/posts', [UserController::class, 'posts'])->name('user.posts');
