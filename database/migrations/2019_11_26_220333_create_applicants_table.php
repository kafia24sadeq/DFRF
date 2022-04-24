<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('applicants')) {
            Schema::create('applicants', function (Blueprint $table) {
                $table->increments('id');
                $table->string('first_name');
                $table->string('second_name');
                $table->string('third_name');
                $table->string('last_name');
                $table->tinyInteger('qualification')->comment('1=>collage, 2=>high school,0=>other');
                $table->string('birth_date');
                $table->string('card_no');
                $table->string('card_source');
                $table->string('mobile');
                $table->string('home');
                $table->tinyInteger('computer')->comment('1=>yes, 0=>no');
                $table->tinyInteger('english')->comment('0=>excellent, 1=>very good, 2=>good, 3=>weak');;
                $table->tinyInteger('work')->comment('1=>yes, 0=>no');
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
        Schema::dropIfExists('applicants');
    }
}
