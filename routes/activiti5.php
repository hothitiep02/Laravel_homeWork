<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vd3Cotroller;

Route::group(['prefix' => 'tutorial'], function()
{
    Route::get('/aws', function()
    {
        echo "aws tutorial";
    });

    Route::get('/jira', function(){
        echo "jira tutorial";
    });

    Route::get('/testing', function(){
        echo "testing tutorial";
    });
});
