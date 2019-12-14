<?php

Route::group([
    'namespace' => 'Rent\Contact\Http\Controllers',
    'middleware' => ['web']
], function () {
    Route::get('contact-us', 'ContactController@index');
    Route::post('contact-us', 'ContactController@store');
});