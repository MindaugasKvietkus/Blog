<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MainController@index');

Route::get('/straipnis/{id}', 'MainController@getArticle');
/*
Route::get('/admin/login', function () {
    return view('admin_login');
});

Route::post('/admin/login/check', function () {
    return redirect('/admin/home');
});
*/
/*
Route::get('/admin/home', function (){
    return view('admin_home');
})->name('admin_home');
*/
/*
Route::group(['middleware' => ['web']], function () {

});
*/
/*
Route::get('/admin/home', function (){
    return view('admin_home');
})->name('admin_home')->middleware('auth');
*/

Auth::routes();

Route::get('/admin/login', 'Auth\LoginController@showLoginForm');

Route::get('/admin/home', 'HomeController@index')->name('home');

Route::get('/admin/add', function (){
   return view('admin_add');
});

Route::post('/admin/add/article', 'MainController@addArticle');

Route::get('/admin/delete/{id}', 'MainController@deleteArticle');

Route::get('/admin/edit/{id}', 'MainController@showEditArticle');

Route::post('/admin/edit/{id}/article', 'MainController@editArticle');

Route::post('/straipnis/{id}/post', 'MainController@addPost');

//Route::POST('/logout', 'LoginController@logout');
