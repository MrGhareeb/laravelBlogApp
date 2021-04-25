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

//home
Route::get('/', [PostController::class, 'index'])->name("home");

//create post
Route::get('/create', [PostController::class, 'create'])->name("createPost");

Route::post("/post/store",[PostController::class,"store"])->name("storePost");

//view post
Route::get('/post/{id}', [PostController::class, 'show'])->name("viewPost");

//delete post
Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name("deletePost");

//edit post
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name("editPost");

Route::post('/post/update/{id}', [PostController::class, 'update'])->name("updatePost");

