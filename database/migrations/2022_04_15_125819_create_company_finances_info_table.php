<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyFinancesInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_finance_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_finance_id')->constrained('company_finances')->cascadeOnDelete()->cascadeOnUpdate();

            $table->float('price_per_share', 8, 3)->nullable();
            $table->enum('type_currency', ['$', '€'])->default('$');
            $table->string('liquidation_pref_order')->nullable();
            $table->float('dividend_rate', 8, 3)->nullable();
            $table->string('investors')->nullable();
            $table->string('shares_outstanding')->nullable();
            $table->float('liquidation_pref_as_multiplier', 8, 3)->nullable();
            $table->string('cumulative')->nullable();
            $table->float('percent_shares_outstanding', 8, 3)->nullable();
            $table->float('conversion_rate', 8, 3)->nullable();
            $table->string('participating')->nullable();
            $table->string('participation_cap')->nullable();

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
        Schema::dropIfExists('company_finances_info');
    }
}
