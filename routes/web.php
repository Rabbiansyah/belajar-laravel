<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('home',['title' => 'Home',]);
});

Route::get('/posts', function () {
    return view('posts',['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' =>'Single Post', 'post' => $post]);
});

Route::get('/author/{user}', function (User $user) {
    return view('posts', ['title' =>'Halaman Penulis: ' . $user->name , 'post' => $user->posts]);
});


Route::get('/about', function () {
    return view('about',['title' => 'About',]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact',]);
});

Route::get('/faiz', function () {
    return view('faiz');
});

Route::get('/app', function () {
    return view('app',['name' => 'Faiz',]);
});

Route::get('/menu', [MenuController::class, 'index']);


