<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tweet.index');
});

// 未ログインユーザー向けのルート
Route::middleware('guest')->group(function() {
Route::get('/login', \App\Http\Controllers\Auth\Login\IndexController::class)
    ->name('login');
Route::post('/login', \App\Http\Controllers\Auth\Login\PostController::class);

Route::get('/register', \App\Http\Controllers\Auth\Register\IndexController::class)
    ->name('register');
Route::post('/register', \App\Http\Controllers\Auth\Register\PostController::class);
});

// ログアウト（認証済みユーザーのみ）
Route::post('/logout', \App\Http\Controllers\Auth\Logout\PostController::class)
    ->middleware('auth')
    ->name('logout');

// つぶやき一覧（誰でもアクセス可能）
Route::get('/tweet', App\Http\Controllers\Tweet\IndexController::class)
    ->name('tweet.index');

// 認証が必要なルート
Route::middleware('auth')->group(function () {
Route::post('/tweet', App\Http\Controllers\Tweet\CreateController::class)
    ->name('tweet.create');
});