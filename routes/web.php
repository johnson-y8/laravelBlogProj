<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestUserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\SinglePostController;
//use App\Http\Controllers\;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/article2',[ArticleController::class, 'addArticle']);
Route::get('/article1',[TestUserController::class, 'viewUser']);
Route::post('/addpost',[BlogPostController::class, 'addPost'])->name('addpost');
//Route::get('/update-post',[BlogPostController::class, 'updatePost'])->name('edit');
Route::get('/delete-post/{post_id}',[BlogPostController::class, 'deletePost'])->name('delete');
Route::get('/',[BlogPostController::class, 'index'])->name('index');
Route::view('/create', 'createPost');
Route::view('/editpost/{id}', [BlogPostController::class, 'editPost'])->name('editpost');

Route::get('/single/{post_id}',[SinglePostController::class, 'getPost'])->name('single');


Route::get('/editP/{id}',[BlogPostController::class, 'editP'])->name('editP');

Route::post('/updateP/{id}',[BlogPostController::class, 'updatePost'])->name('updatePost');




// php artisan cache:clear
// php artisan view:clear
// php artisan route:clear