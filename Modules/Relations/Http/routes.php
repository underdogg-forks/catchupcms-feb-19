<?php

Route::group(['middleware' => 'web', 'prefix' => 'relations', 'namespace' => 'Cms\\Modules\Relations\Http\Controllers'], function()
{
    Route::get('/', 'RelationsController@index');
});
