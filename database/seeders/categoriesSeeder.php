<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // Thêm dòng này để sử dụng Str::random()

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Chèn dữ liệu vào bảng 'categories'
        DB::table('categories')->insert([
            ['name' => 'mi xao', 
             'discription'=>'ngon'],// Sử dụng Str::random() thay vì str_random()
            ['name' => 'mi ca', 
             'discription'=>'cay'], // Sử dụng Str::random() thay vì str_random()
        ]);
    }
}
