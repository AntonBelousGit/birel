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
            $table->string('companyName');
            $table->string('companyAddress');
            $table->date('founded');
            $table->string('total_funding')->default(0);
            $table->unsignedBigInteger('total_funding_decode')->default(0);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->unsignedDouble('valuation',15,2)->nullable();
            $table->string('valuation_encode')->default(0);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('companies');
    }
}
