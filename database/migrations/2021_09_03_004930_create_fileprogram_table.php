<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileprogramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileprogram', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('students_numbers', 45);
            $table->timestamps();

            $table->foreign('classroom_id')->references('id')->on('classroom');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fileprogram');
    }
}
