<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Route::get('/home/{name}',function ($name){
//    echo "Hello $name <3";
//    return redirect() -> route('tag');
//})->where(["name" =>'[a-zA-Z]+']);
//
//
//Route::group(['prefix'=>'test'],function(){
//    Route::get('test',['as' => 'tag' ,function (){
//        echo "test";
//        return  redirect() -> route('tag1');
//    }]);
//
//    Route::get('test1',function (){
//        return view("dangnhap");
//    })->name('tag1');
//
//});
Route::group(['prefix'=>'book'],function(){
    Route::post('dangnhap',"HomeController@doLogin");
});
Route::post('book',"BookController@add");
Route::get('book',"BookController@add");
Route::get('chapter',"BookController@getChapter");
Route::get('section',"BookController@getSection");
Route::get('dangnhap',function (){
    return view('dangnhap');
});
Route::get('admin',function (){
    return view('admin');
});
Route::get('testcontroller','home_controller@test');