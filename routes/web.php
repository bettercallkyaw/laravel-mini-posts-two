<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//list all posts
Route::get('/',([PostController::class,'index']))
       ->name('all.posts');

//posts form route
Route::get('/posts/create',([PostController::class,'create']))
       ->name('posts.create'); 

//posts validate route
Route::post('/posts/create',([PostController::class,'store']))
       ->name('posts.store');

//posts edit form route
Route::get('/posts/{id}/update',([PostController::class,'edit']))
        ->name('posts.edit');       


//posts edit validate route
Route::put('/posts/{id}/update',([PostController::class,'update']))
       ->name('posts.update');

//posts detail route
Route::get('/posts/{id}/show',([PostController::class,'show']))
       ->name('posts.show');        


//posts destroy route
Route::get('/posts/{id}/destroy',([PostController::class,'destroy']))
       ->name('posts.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
