<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sample', [App\Http\Controllers\Sample\IndexController::class, 'show']);
Route::get('/sample/{id}', [App\Http\Controllers\Sample\IndexController::class, 'showId']);

Route::get('/tweet', App\Http\Controllers\Tweet\IndexController::class)
    ->name('tweet.index');
Route::post('/tweet', App\Http\Controllers\Tweet\CreateController::class)
    ->name('tweet.create');

Route::get('/tweet/{tweetId}', \App\Http\Controllers\Tweet\Update\IndexController::class)
    ->name('tweet.update.index');
Route::put('/tweet/{tweetId}', \App\Http\Controllers\Tweet\Update\PutController::class)
    ->name('tweet.update.put');
Route::delete('/tweet/{tweetId}', \App\Http\Controllers\Tweet\DeleteController::class)
    ->name('tweet.delete');

Route::get('/register', \App\Http\Controllers\Auth\Register\IndexController::class)
    ->name('register');
Route::post('/register', \App\Http\Controllers\Auth\Register\PostController::class);
//Route::get('/login', \App\Http\Controllers\Auth\Login\IndexController::class)
//    ->name('login');