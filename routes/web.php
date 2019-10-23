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
    return view('home');
});

Route::get('home/{name?}',['as'=>'home.index',function($name='Everybody'){
    return view('home');
}]);

Route::get('about/{name?}',['as'=>'about.index',function($name='Everybody'){
    return view('about');
}]);

Route::get('news/{name?}',['as'=>'news.index',function($name='Everybody'){
    return view('news');
}]);
