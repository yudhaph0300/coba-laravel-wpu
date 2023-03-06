<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Mohammad Yudha Pamungkas",
        "email" => "yudhapamungkas0300@gmail.com",
        "image" => "yudha.png"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);


// Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

// // Category
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Caegory: $category->name",
//         "active" => "categories",
//         'posts' => $category->posts->load('category', 'author'),

//     ]);
// });

// // author
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         "active" => "posts",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });
