<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSettingNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_setting_notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->boolean('new_message')->default(1);
            $table->boolean('new_order_subscribe_company')->default(1)->comment('New orders in companies you subscribe to');
            $table->boolean('new_order_company_have_your_order')->default(1)->comment('New orders in the companies for which you have placed an order');
            $table->boolean('new_system_message')->default(1);
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
        Schema::dropIfExists('user_setting_notifications');
    }
}
