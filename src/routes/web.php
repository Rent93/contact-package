<?php

Route::group([
    'namespace' => 'Rent\Contact\Http\Controllers',
    'middleware' => ['web']
], function () {
    Route::get('contact-us', 'JokeController@index');
    Route::post('contact-us', 'JokeController@store');
});