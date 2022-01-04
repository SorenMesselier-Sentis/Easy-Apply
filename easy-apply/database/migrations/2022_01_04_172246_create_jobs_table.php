<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->text('description');
            $table->integer('salary')->nullable();
            $table->date('archive_date');
            $table->timestamps();

            $table->foreignId('id_location')->nullable()->constrained('locations')->onDelete('cascade');
            $table->foreignId('id_working_mode')->constrained('working_modes')->onDelete('cascade');
            $table->foreignId('id_contract_type')->constrained('contract_types')->onDelete('cascade');
            $table->foreignId('id_company')->constrained('companies')->onDelete('cascade');
            $table->foreignId('id_sector')->constrained('sectors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
