<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\signupController;
// use App\Http\Controllers\CovidController;
use App\Http\Controllers\MockAPIController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Schema;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome', function () {
//     return 'Chào mừng các bạn đã đến với PNV';
// });

// Route::get('vd3',[vd3Controller::class,index]);

// Route::get('/index', [PostController::class, 'index']);
// Route::get('sigup', function () {
//     return view('');
// });

// Route::get('/signup', [signupController::class, 'signup']);
// Route::get('/covid', function () {
//     return view('Covid');
// });
// Route::post('/signup', [signupController::class, 'displayInfor']);

// Route::get('/covid', [CovidController::class, 'getData']);

// Route::resource('products', MockAPIController::class);

// Route::get('/products',[ProductController::class, 'index']) -> name('products.index');

//Master
// use App\Http\Controllers\PageController;
// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/index', [ PageController::class, 'getIndex']);

// Route::get('loaisanpham',[
//     'as'=>'loaisanpham',
//     'use'=>'PageController@getLoaiSp'
// ]);

// Route::get('chi-tiet-san-pham',[				
// 	'as'=>'chitietsanpham',			
// 	'uses'=>'PageController@geChitiet'			
// 	]);			

// Route::get('lien_he',[
//     'as'=>'lienhe',
//     'uses'=>'PageController@geLienhe'
// ]);

// Route::get('gioi_thieu',[
//     'as'=>'about',
//     'uses'=>'PageController@getAbout'
// ]);

// use App\Http\Controllers\ShopController;
// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/shop', [ ShopController::class, 'getIndex']);

// Route::get('database', function() {
//     Schema::create('loaisanpham',function($table) {
//         $table->increments('ID');
//         $table->string('Name',200);
//         $table->Float('price');
//         $table->string('Image');
//     });
//     echo "da thuc hien lenh tao bang thanh cong";
// });

// Route::get('products', function() {
//     echo "Đã thực hiện lệnh tạo bảng thành công";
// });

use App\Http\Controllers\CreateProductsController;
Route::get('/products', [ CreateProductsController::class, 'create']);

?>


