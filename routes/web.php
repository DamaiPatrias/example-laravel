<?php

// use App\Http\Controllers\Controller;

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;


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
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "nama",
        'email' => 'nama.email@gmail.com'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

//single post
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('post', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('post', [
//         'title' => "Post by Author : $author->name",
//         'active' => 'author',
//         'posts' => $author->post->load('category', 'author'),
//         // 'category' => $category->name
//     ]);
// });

// Route::get('/authors/{user}', [PostController::class, 'userpost']);
