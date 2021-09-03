<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 45);
            $table->string('document', 45);
            $table->string('email', 45);
            $table->string('phone', 45);
            $table->string('age', 45);
            $table->string('classroom_leader', 45);
            $table->string('address', 45);
            $table->timestamps();

            $table->foreign('genders_id')->references('id')->on('genders');
            $table->foreign('documenttype_id')->references('id')->on('documenttype');
            $table->foreign('role_id')->references('id')->on('role');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
