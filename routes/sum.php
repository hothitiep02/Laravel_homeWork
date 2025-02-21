<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vd3Cotroller;
 
Route::get('tinhtong', function() {
    return view('sum');
});

Route::post('tinhtong',['SumController'::class, 'tinhtong']);
