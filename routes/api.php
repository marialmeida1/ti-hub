<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentLessonController;
use App\Http\Controllers\CommentPostController;
use App\Http\Controllers\CompleteController;
use App\Http\Controllers\IndicationController;
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

    // Comment for LESSON
    Route::post('/comment/lesson/{lesson}', [CommentLessonController::class, 'store']);
    Route::get('/comment/lesson/{lesson}', [CommentLessonController::class, 'index']);
    Route::get('/comment/lesson/{lesson}/{id}', [CommentLessonController::class, 'show']);
    Route::patch('/comment/lesson/{lesson}/{id}', [CommentLessonController::class, 'update']);
    Route::delete('/comment/lesson/{lesson}/{id}', [CommentLessonController::class, 'destroy']);


    // Indication
    Route::post('/indication/{lesson}', [IndicationController::class, 'store']);
    Route::get('/indication/{lesson}', [IndicationController::class, 'index']);
    Route::get('/indication/{lesson}/{id}', [IndicationController::class, 'show']);
    Route::patch('/indication/{lesson}/{id}', [IndicationController::class, 'update']);
    Route::delete('/indication/{lesson}/{id}', [IndicationController::class, 'destroy']);

    // Indication
    Route::post('/complete/{lesson}', [CompleteController::class, 'store']);
    Route::get('/complete', [CompleteController::class, 'index']);
    Route::get('/complete/{id}', [CompleteController::class, 'show']);
    Route::delete('/complete/{id}', [CompleteController::class, 'destroy']);
});
