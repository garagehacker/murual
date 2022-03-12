<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquityFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equity_funds', function (Blueprint $table) {
            $table->id();
            $table->string('fund_name');
            $table->string('fund_url');
            $table->string('fund_risk');
            $table->string('fund_return');
            $table->string('fund_age');
            $table->string('fund_nav');
            $table->string('fund_aum');
            $table->string('fund_goal');
            $table->string('fund_info');
            $table->string('fund_entry_load');
            $table->string('fund_exit_load');
            $table->string('fund_min_sip');
            $table->string('fund_min_lumpsum');
            $table->string('fund_manager_name');
            $table->string('fund_manager_total_exp');
            $table->string('fund_manager_info');
            $table->string('fund_return_1_year');
            $table->string('fund_return_3_year');
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
        Schema::dropIfExists('equity_funds');
    }
}
