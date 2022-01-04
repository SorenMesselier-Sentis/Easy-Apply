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

            $table->foreignId('id_location')->nullable()->constrained('location')->onDelete('cascade');
            $table->foreignId('id_company_size')->nullable()->constrained('company_size')->onDelete('cascade');
            $table->foreignId('id_sector')->nullable()->constrained('sectors')->onDelete('cascade');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
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
