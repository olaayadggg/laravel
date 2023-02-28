<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Usercontroller;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/allposts', [Postcontroller::class , 'index'])->name('posts.allposts');
Route::get('/posts/singlepost/{id}', [Postcontroller::class , 'show'])->name('posts.singlepost');
Route::delete('/posts/destroy/{id}', [Postcontroller::class , 'destroy'])->name('posts.destroy');
Route::get('/posts/update/{id}', [Postcontroller::class , 'update'])->name('posts.update');
Route::put('/posts/edit/{id}', [Postcontroller::class , 'edit'])->name('posts.edit');
Route::get('/posts/create', [Postcontroller::class , 'create'])->name('posts.create');
Route::post('/posts/store', [Postcontroller::class , 'store'])->name('posts.store');


Route::get('/index', [Usercontroller::class , 'index'])->name('users');
Route::get('/show/{id}', [Postcontroller::class , 'show'])->name('posts');


Route::get('/welcome', function (){
    return view('welcome');
});

