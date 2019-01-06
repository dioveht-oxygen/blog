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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/','AdminController@getAdmin')->name('admin.get.admin');
});

Route::get('/register','Auth\RegisterController@getRegister')->name('register.get.register');
Route::post('/register','Auth\RegisterController@postRegister')->name('register.post.register');

Route::get('/login','Auth\LoginController@getLogin')->name('login.get.login');
Route::post('/login','Auth\LoginController@postLogin')->name('login.post.login');

Route::get('/mail','MailController@getMail')->name('mail.get.mail');
Route::post('/mail','MailController@postSendMail')->name('mail.post.mail');





