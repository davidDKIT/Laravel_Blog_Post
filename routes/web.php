<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
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

Route::get('/', [PagesController::class, 'index']);
Route::post('/search_post',[PostsController::class,'search']);
Route::resource('/blog', PostsController::class); 
Route::post('/blog/{post}/comments', [CommentsController::class, 'storeComment']);
Route::delete('/comments/{comment}', [CommentsController::class, 'destroy']); 
Route::get('/like', [App\Http\Controllers\PostsController::class, 'like']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


