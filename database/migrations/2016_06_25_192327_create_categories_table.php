<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 100);
            $table->tinyInteger('status');
            $table->tinyInteger('type');
            $table->tinyInteger('parent')->nullable();
            $table->tinyInteger('menushow')->nullable();
            $table->tinyInteger('menuorder')->nullable();
            $table->tinyInteger('homeshow')->nullable();
            $table->tinyInteger('homeorder')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
