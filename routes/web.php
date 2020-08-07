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
        Route::get('profile', 'PostController@Profile');
        Route::post('change-cover', 'PostController@changeCover');
        Route::post('change-avatar', 'PostController@changeAvatar');
        Route::post('update-profile', 'PostController@editProfile');
        Route::post('update-settings', 'PostController@editSettings');
        Route::post('update-notification', 'PostController@editNotification');

        //Getting Profile Views
        Route::get('/timeline','PostController@getTimeline');
        Route::get('/about','PostController@getAbout');
        Route::get('/setting','PostController@getSettings');
        Route::get('/friends','PostController@getFriends');
        Route::get('/photos','PostController@getPhotos');
        Route::get('/videos','PostController@getVideos');

    });
    //Register
    Route::post('/register','Auth\RegisterController@CreateUser');
    // Get Cities
    Route::get('/cities', 'CityController@getCitiesById');
    // Email Verification
    Route::get('email/verify', 'Auth\RegisterController@verifyEmail');

