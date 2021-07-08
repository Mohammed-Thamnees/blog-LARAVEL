<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['register'=>false]);


Route::get('/','App\Http\Controllers\FrontendController@index')->name('home');
Route::get('/login','App\Http\Controllers\FrontendController@login')->name('login.form');
Route::post('/login-submit','App\Http\Controllers\FrontendController@loginsubmit')->name('login.submit');
Route::get('/logout','App\Http\Controllers\FrontendController@logout')->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::get('/staff/home', [App\Http\Controllers\HomeController::class, 'staff'])->name('staff.home');
Route::get('admin/comment', 'App\Http\Controllers\CommentController@index')->name('comments');
Route::get('admin/article', 'App\Http\Controllers\ArticleController@adminArticles')->name('admin-articles');
Route::resource('/staff','App\Http\Controllers\StaffController');
Route::resource('/user','App\Http\Controllers\UserController');
Route::resource('/category','App\Http\Controllers\CategoryController');
Route::resource('/article','App\Http\Controllers\ArticleController');
Route::resource('/comment','App\Http\Controllers\CommentController');



