<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('date')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('valuation')->nullable();
            $table->unsignedBigInteger('volume');
            $table->unsignedBigInteger('share_price')->nullable();
            $table->unsignedBigInteger('share_price_decode')->nullable();
            $table->unsignedBigInteger('share_number')->nullable();
            $table->enum('type',['ASK','BID','Tender']);
            $table->enum('deal_structure',['direct','spv','forward contract','direct or spv']);
            $table->enum('share_type',['Preferred','Common','Preferred and Common']);
            $table->enum('share_type_currency',['usd','eur'])->default('usd');

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
        Schema::dropIfExists('company_orders');
    }
}
