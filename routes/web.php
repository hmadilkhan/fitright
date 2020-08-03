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

    Auth::routes();

    Route::get('/logout','Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => 'auth' ],function(){
        //Register Users
        Route::get('/home', 'HomeController@index')->name('home');
        Route::post('/create-post', 'PostController@store');
        Route::post('post-comment', 'PostController@postcomment');
        Route::post('like-comment', 'PostController@likeComment');
        Route::post('like-post', 'PostController@likePost');


    });
    Route::post('/register','Auth\RegisterController@CreateUser');


    // Get Cities
    Route::get('/cities', 'CityController@getCitiesById');
    // Email Verification
    Route::get('email/verify', 'Auth\RegisterController@verifyEmail');

