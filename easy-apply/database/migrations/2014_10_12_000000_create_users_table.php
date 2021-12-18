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
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->dateTime('birth_date');
            $table->string('website', 255);
            $table->string('phone');
            $table->string('cv');
            $table->string('picture')->nullable();
            $table->string('grade');
            $table->string('email')->unique();
            $table->string('facebook', 255)->nullable();
            $table->string('linked_in', 255)->nullable();
            $table->string('localisation', 255);
            $table->string('password');
            $table->boolean('is_company');
            $table->boolean('is_admin');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
