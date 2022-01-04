<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('is_completed')->default(0);
            $table->timestamps();

            $table->foreignId('id_location')->nullable()->constrained('locations');
            $table->foreignId('id_company_size')->nullable()->constrained('company_sizes');
            $table->foreignId('id_sector')->nullable()->constrained('sectors');
            $table->foreignId('id_user')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
