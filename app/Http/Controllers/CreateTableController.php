<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateTableController extends Controller
{
    public function createAllTables() 
    {   
        try {
            // Kiểm tra và tạo bảng addresses
            if (!Schema::hasTable('addresses')) {
                Schema::create('addresses', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('street', 255)->nullable();
                    $table->string('country', 255);
                    $table->unsignedInteger('icon_id')->nullable();
                    $table->unsignedInteger('monster_id');
                    $table->timestamps();
                });
            }

            // Kiểm tra và tạo bảng articles
            if (!Schema::hasTable('articles')) {
                Schema::create('articles', function (Blueprint $table) {
                    $table->increments('id');
                    $table->unsignedInteger('category_id');
                    $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
                    $table->string('title', 255);
                    $table->string('slug', 255)->default('');
                    $table->text('content');
                    $table->string('image', 255)->nullable();
                    $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED');
                    $table->date('date');
                    $table->boolean('featured')->default(0);
                    $table->timestamps();
                    $table->softDeletes();
                });
            }

            // Kiểm tra và tạo bảng article_tag
            if (!Schema::hasTable('article_tag')) {
                Schema::create('article_tag', function (Blueprint $table) {
                    $table->increments('id');
                    $table->unsignedInteger('article_id');
                    $table->unsignedInteger('tag_id');
                    $table->timestamps();
                    $table->softDeletes();
                });
            }

            // Kiểm tra và tạo bảng a_s
            if (!Schema::hasTable('a_s')) {
                Schema::create('a_s', function (Blueprint $table) {
                    $table->increments('id');
                    $table->unsignedInteger('b_s_id');
                });
            }

            // Kiểm tra và tạo bảng bills (sử dụng engine InnoDB)
            if (!Schema::hasTable('bills')) {
                Schema::create('bills', function (Blueprint $table) {
                    $table->engine = 'InnoDB'; // Thay MyISAM bằng InnoDB
                    $table->increments('id');
                    $table->integer('id_customer')->nullable();
                    $table->date('date_order')->nullable();
                    $table->float('total')->nullable()->comment('Tổng tiền');
                    $table->string('payment', 200)->nullable()->comment('Hình thức thanh toán');
                    $table->string('note', 500)->nullable();
                    $table->timestamps();
                });
            }

            // Kiểm tra và tạo bảng bill_detail (sử dụng engine InnoDB)
            if (!Schema::hasTable('bill_detail')) {
                Schema::create('bill_detail', function (Blueprint $table) {
                    $table->engine = 'InnoDB';
                    $table->increments('id');
                    $table->integer('id_bill');
                    $table->integer('id_product');
                    $table->integer('quantity')->comment('Số lượng');
                    $table->double('unit_price');
                    $table->timestamps();
                });
            }

            // Kiểm tra và tạo bảng b_s
            if (!Schema::hasTable('b_s')) {
                Schema::create('b_s', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('data', 255);
                });
            }

            // Kiểm tra và tạo bảng categories
            if (!Schema::hasTable('categories')) {
                Schema::create('categories', function (Blueprint $table) {
                    $table->increments('id');
                    $table->integer('parent_id')->default(0);
                    $table->unsignedInteger('lft')->nullable();
                    $table->unsignedInteger('rgt')->nullable();
                    $table->unsignedInteger('depth')->nullable();
                    $table->string('name', 255);
                    $table->string('slug', 255);
                    $table->timestamps();
                    $table->softDeletes();
                });
            }

            // Kiểm tra và tạo bảng comments
            if (!Schema::hasTable('comments')) {
                Schema::create('comments', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('username', 255);
                    $table->text('comment');
                    $table->unsignedInteger('id_product');
                    $table->timestamps();
                });
            }

            // Kiểm tra và tạo bảng customer (sử dụng engine InnoDB)
            if (!Schema::hasTable('customer')) {
                Schema::create('customer', function (Blueprint $table) {
                    $table->engine = 'InnoDB';
                    $table->increments('id');
                    $table->string('name', 100);
                    $table->string('gender', 10);
                    $table->string('email', 50);
                    $table->string('address', 100);
                    $table->string('phone_number', 20);
                    $table->string('note', 200);
                    $table->timestamps();
                });
            }

            // Kiểm tra và tạo bảng dummies
            if (!Schema::hasTable('dummies')) {
                Schema::create('dummies', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('name', 255);
                    $table->text('description');
                    $table->longText('extras');
                    $table->timestamps();
                });
            }

            // Kiểm tra và tạo bảng failed_jobs
            if (!Schema::hasTable('failed_jobs')) {
                Schema::create('failed_jobs', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->text('connection');
                    $table->text('queue');
                    $table->longText('payload');
                    $table->longText('exception');
                    $table->timestamp('failed_at')->useCurrent();
                });
            }

            // Kiểm tra và tạo bảng icons
            if (!Schema::hasTable('icons')) {
                Schema::create('icons', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('name', 255);
                    $table->string('icon', 255);
                    $table->timestamps();
                });
            }

            // Kiểm tra và tạo bảng menu_items
            if (!Schema::hasTable('menu_items')) {
                Schema::create('menu_items', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('name', 100);
                    $table->string('type', 20)->nullable();
                    $table->string('link', 255)->nullable();
                    $table->unsignedInteger('page_id')->nullable();
                    $table->unsignedInteger('parent_id')->nullable();
                    $table->unsignedInteger('lft')->nullable();
                    $table->unsignedInteger('rgt')->nullable();
                    $table->unsignedInteger('depth')->nullable();
                    $table->timestamps();
                    $table->softDeletes();
                });
            }

            // Kiểm tra và tạo bảng migrations
            if (!Schema::hasTable('migrations')) {
                Schema::create('migrations', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('migration', 191);
                    $table->integer('batch');
                });
            }

            // Kiểm tra và tạo bảng model_has_permissions
            if (!Schema::hasTable('model_has_permissions')) {
                Schema::create('model_has_permissions', function (Blueprint $table) {
                    $table->unsignedInteger('permission_id');
                    $table->string('model_type', 255);
                    $table->unsignedBigInteger('model_id');
                });
            }

            // Kiểm tra và tạo bảng model_has_roles
            if (!Schema::hasTable('model_has_roles')) {
                Schema::create('model_has_roles', function (Blueprint $table) {
                    $table->unsignedInteger('role_id');
                    $table->string('model_type', 255);
                    $table->unsignedBigInteger('model_id');
                });
            }

            // Kiểm tra và tạo bảng monsters
            if (!Schema::hasTable('monsters')) {
                Schema::create('monsters', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('address', 255)->nullable();
                    $table->string('browse', 255)->nullable();
                    $table->boolean('checkbox')->nullable();
                    $table->text('wysiwyg')->nullable();
                    $table->string('color', 255)->nullable();
                    $table->string('color_picker', 255)->nullable();
                    $table->date('date')->nullable();
                    $table->date('date_picker')->nullable();
                    $table->date('start_date')->nullable();
                    $table->date('end_date')->nullable();
                    $table->dateTime('datetime')->nullable();
                    $table->dateTime('datetime_picker')->nullable();
                    $table->string('email', 255)->nullable();
                    $table->integer('hidden')->nullable();
                    $table->string('icon_picker', 255)->nullable();
                    $table->string('image', 255)->nullable();
                    $table->string('month', 255)->nullable();
                    $table->integer('number')->nullable();
                    $table->double('float', 8, 2)->nullable();
                    $table->string('password', 255)->nullable();
                    $table->string('radio', 255)->nullable();
                    $table->string('range', 255)->nullable();
                    $table->integer('select')->nullable();
                    $table->string('select_from_array', 255)->nullable();
                    $table->integer('select2')->nullable();
                    $table->string('select2_from_ajax', 255)->nullable();
                    $table->string('select2_from_array', 255)->nullable();
                    $table->text('simplemde')->nullable();
                    $table->text('summernote')->nullable();
                    $table->text('table')->nullable();
                    $table->text('textarea')->nullable();
                    $table->string('text', 255);
                    $table->text('tinymce')->nullable();
                    $table->string('upload', 255)->nullable();
                    $table->string('upload_multiple', 255)->nullable();
                    $table->string('url', 255)->nullable();
                    $table->text('video')->nullable();
                    $table->string('week', 255)->nullable();
                    $table->text('extras')->nullable();
                    $table->timestamps();
                    $table->binary('base64_image')->nullable();
                });
            }

            // Trả về thông báo thành công
            return response()->json(['message' => 'All tables created successfully!']);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create tables: ' . $e->getMessage()]);
        }
    }
}
