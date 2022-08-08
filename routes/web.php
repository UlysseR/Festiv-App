<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/home', [UserController::class, 'home'])->name('user.home');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user', [UserController::class, 'update'])->name('user.update');

Route::get('/post', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');




