<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('make_id');
            $table->string('year');
            $table->timestamps();
            $table->foreign('make_id')
                    ->references('id')
                    ->on('makes')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_years');
    }
}
