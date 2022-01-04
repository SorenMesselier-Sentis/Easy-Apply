<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_languages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('id_language')->constrained('languages')->onDelete('cascade');
            $table->foreignId('id_job')->constrained('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_languages');
    }
}
