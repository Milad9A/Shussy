<?php

Route::post('/login', 'api\Auth\LoginController@login');
Route::post('/register', 'api\Auth\RegisterController@register');

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('/tweets', 'api\TweetsController@index');
    Route::post('/tweets', 'api\TweetsController@store');

    Route::post('/tweets/{id}/like', 'api\TweetLikesController@store');
    Route::delete('/tweets/{id}/like', 'api\TweetLikesController@destroy');

    Route::patch('/profiles/{id}', 'api\ProfilesController@update');
    Route::post('/profiles/{id}/follow', 'api\FollowsController@store');

    Route::get('/profiles/{id}/timeline', 'api\ProfilesController@index');
});
