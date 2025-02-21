<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\signupController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/welcome', function () {
//     return 'Chào mừng các bạn đã đến với PNV';
// });

// Route::get('vd3',[vd3Controller::class,index]);

// Route::get('/index', [PostController::class, 'index']);
// Route::get('sigup', function () {
//     return view('');
// });

// Route::get('/signup', [signupController::class, 'signup']);
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [signupController::class, 'displayInfor']);

?>


