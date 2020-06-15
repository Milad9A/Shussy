<?php

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function (){
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store');

    Route::post('tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('tweets/{tweet}/like', 'TweetLikesController@destroy');

    Route::post('/profiles/{user}/follow', 'FollowsController@store')->name('follow');
    Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->name('profile.edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user}', 'ProfilesController@update')->name('profile.update')->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController@index');
});
Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');

Auth::routes();

