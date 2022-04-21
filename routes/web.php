<?php

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

Route::get('/main', function () {
  return view('welcome');
});

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/post1', function () {
//     return view('post');
// });

// Route::get('/top', function () {
//     return view('top');
// });

// 投稿ページを表示
Route::get('/create', 'FormController@postpage');

// 投稿をコントローラーに送信
Route::post('/newpostsend', 'FormController@savenew');

// 投稿一覧を表示する
Route::get('/index', 'FormController@index');

// 投稿を表示する
Route::get('/show/{id}', 'FormController@show');

// リッチテキストエディターページ
Route::get('/create2', 'FormController@wys');

// 問い合わせフォームページ
Route::get('/contact', 'ContactController@contact');

// 問い合わせフォームの送信
Route::post('/enqsend', 'ContactController@enquiry');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
