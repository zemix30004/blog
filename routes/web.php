<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if (!file_exists($path)) {
        return redirect('/');

        abort(404);
    }
    $post = file_get_contents($path);

    return view('post', [
        'post' => $post
    ]);
});
// Route::get('/', [PostController::class, 'index'])->name('posts.index');
// Route::get('post/index', [PostController::class, 'index'])->name('post.index');
// Route::get('post/search', [PostController::class, 'search'])->name('post.search');
// Route::get('/', 'App\Http\Controllers\PostController@index');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
