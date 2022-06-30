<?php

use Illuminate\Support\Facades\Route;

use App\Content;

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
Route::get('/','FrontController@index');
Route::get('/content','FrontController@content');
Route::get('/content-detail/{id}','FrontController@content_detail');

Route::get('/admin',function(){
    $c = Content::all();
    return view('admin.index',compact('c'));
})->name('admin')->middleware('admin');

// Auth::routes();
Route::group(['middleware'=>'redirectIfLogin'],function (){
    Route::get('/login','AuthController@showLogin')->name('auth.login');
    Route::post('/login','AuthController@postLogin')->name('auth.login');
});

Route::get('/logout','AuthController@logout')->middleware('admin');

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware' => 'admin'],function (){
    Route::resource('member', 'MemberController',['as'=>'admin']);
    Route::resource('content', 'ContentController',['as'=>'admin']);
    Route::resource('category','CategoryController',['as'=>'admin']);
});

