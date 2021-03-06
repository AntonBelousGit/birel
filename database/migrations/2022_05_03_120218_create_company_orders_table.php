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
            $table->text('description')->nullable();
            $table->unsignedFloat('valuation',8,3)->nullable();
            $table->string('valuation_encode')->nullable();
            $table->unsignedFloat('volume',8,3)->nullable();
            $table->string('volume_encode')->nullable();
            $table->unsignedFloat('share_price',8,3)->nullable();
            $table->string('share_price_encode')->nullable();
            $table->unsignedFloat('share_number',8,3)->nullable();
            $table->enum('type', ['ASK', 'BID', 'LFO', 'Tender']);
            $table->enum('sub_type', ['ASK', 'BID'])->nullable();
            $table->enum('deal_structure', ['direct', 'spv', 'forward contract', 'direct or spv', 'any']);
            $table->enum('share_type', ['Preferred', 'Common', 'Preferred and Common', 'any']);
            $table->enum('share_type_currency', ['$', '€'])->default('$');
            $table->enum('status', ['active', 'inactive', 'moderation','history'])->default('moderation');
            $table->enum('user_status', ['active', 'inactive'])->default('active');
            $table->boolean('user_can_update')->default(1);
            $table->boolean('history')->default(0);
            $table->date('publish_time')->nullable();
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
