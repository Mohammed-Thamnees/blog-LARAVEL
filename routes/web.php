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


Route::get('/login','App\Http\Controllers\FrontendController@login')->name('login.form');
Route::post('/login-submit','App\Http\Controllers\FrontendController@loginsubmit')->name('login.submit');
Route::get('/logout','App\Http\Controllers\FrontendController@logout')->name('logout');
Route::get('/register','App\Http\Controllers\FrontendController@register')->name('register.form');
Route::post('/register-submit','App\Http\Controllers\FrontendController@registersubmit')->name('register.submit');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::get('admin/comment', 'CommentController@index')->name('comments');
Route::get('admin/article', 'ArticleController@adminArticles')->name('admin-articles');
