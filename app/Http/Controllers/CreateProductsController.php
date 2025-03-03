<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class CreateProductsController extends Controller
{
    public function create () {
        Schema::create('products',function($table) {
            $table->increments('ID');
            $table->string('Name',200);
            $table->Float('price');
            $table->string('Image');
        });
        echo "Đã thực hiện lệnh tạo bảng thành công";
    }
    
}
