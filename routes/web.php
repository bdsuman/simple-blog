<?php
namespace App\Http\Controllers;
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

Route::get('/', [PostController::class,'index']);
Route::get('/post/{id}', [PostController::class, 'view']);
Route::post('/comment/store/{id}', [CommentController::class, 'store'])->name('comments.add');

//ajax
Route::get('/load-post',[PostController::class,'load_post']);

