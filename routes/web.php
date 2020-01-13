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

use App\Mail\NewUserWelcomeMail;

Auth::routes();
Route::get('/email', function(){
    return new NewUserWelcomeMail();
});
Route::get('/', 'PostsController@index');
Route::post('follow/{user}','FollowsController@store');
Route::get('/p/create','PostsController@create');
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store');

Route::get('/profile/{user}', 'ProfilesControllers@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesControllers@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesControllers@update')->name('profile.update');
