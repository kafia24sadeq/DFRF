<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('price');
                $table->string('content');
                $table->string('warranty');
                $table->string('image_name');
                $table->string('other_images');
                $table->string('caption');
                $table->string('discount')->nullable();
                $table->tinyInteger('status');
                $table->tinyInteger('user_id');
                $table->integer('product_categories_id');
                $table->integer('company_id');
                $table->timestamps();
            });
    
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
