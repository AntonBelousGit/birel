<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_finances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('type_currency', ['$', '€'])->default('$');
            $table->date('date');
            $table->string('transaction_name');
            $table->float('amount_raised',15);
            $table->string('amount_raised_encode')->nullable();
            $table->float('raised_to_date',15);
            $table->string('raised_to_date_encode')->nullable();
            $table->float('issue_price',15,3);
            $table->unsignedFloat('post_money_valuation',15);
            $table->string('post_money_valuation_encode')->nullable();
            $table->text('key_investors');
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
        Schema::dropIfExists('company_finances');
    }
}
