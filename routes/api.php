<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// User 
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    // User
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Profile User
    Route::post('/profile', [ProfileUserController::class, 'store']);
    Route::get('/profile', [ProfileUserController::class, 'index']);
    Route::get('/profile/{id}', [ProfileUserController::class, 'show']);
    Route::patch('/profile/{id}', [ProfileUserController::class, 'update']);
    Route::delete('/profile/{id}', [ProfileUserController::class, 'destroy']);

    // Post
    Route::post('/post', [PostController::class, 'store']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/post/user', [PostController::class, 'index_user']);
    Route::get('/post/{id}', [PostController::class, 'show']);
    Route::patch('/post/{id}', [PostController::class, 'update']);
    Route::delete('/post/{id}', [PostController::class, 'destroy']);

    // Comment for POST
    Route::post('/comment/post/{post}', [CommentPostController::class, 'store']);
    Route::get('/comment/post/{post}', [CommentPostController::class, 'index']);
    Route::get('/comment/post/{post}/{id}', [CommentPostController::class, 'show']);
    Route::patch('/comment/post/{post}/{id}', [CommentPostController::class, 'update']);
    Route::delete('/comment/post/{post}/{id}', [CommentPostController::class, 'destroy']);
});
