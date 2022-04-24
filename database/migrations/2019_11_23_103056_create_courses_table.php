<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if (Schema::hasTable('courses')) {
        //     Schema::create('courses', function (Blueprint $table) {
        //         $table->increments('id');
        //         $table->string('name');
        //         $table->string('image_name');
        //         $table->text('description');
        //         $table->text('course_content');
        //         $table->string('course_time');
        //         $table->date('starting_date');
        //         $table->string('trainer_name');
        //         $table->string('hours_no');
        //         $table->tinyInteger('status');
        //         $table->timestamps();
        //     });
    
        // }
         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
