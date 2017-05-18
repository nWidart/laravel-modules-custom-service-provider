<?php

Route::group(['middleware' => 'web', 'prefix' => 'book', 'namespace' => 'Modules\Book\Http\Controllers'], function()
{
    Route::get('/', 'BookController@index');
});
