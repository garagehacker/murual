<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_folios', function (Blueprint $table) {
            $table->id();
            $table->string('nfo_folio_no');
            $table->string('nfo_folio_type');
            $table->string('nfo_start_date');
            $table->string('nfo_product_name');
            $table->string('nfo_balance_unit');
            $table->string('nfo_avg_cost_price');
            $table->string('nfo_purchase_cost_price');
            $table->string('nfo_div_init_paid');
            $table->string('nfo_div_init_reinv');
            $table->string('nfo_no_days');
            $table->string('nfo_current_nav');
            $table->string('nfo_curret_value');
            $table->string('nfo_profile_plus_loss');
            $table->string('nfo_abs_percentage');
            $table->string('nfo_cagr');
            $table->string('nfo_xirr');
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
        Schema::dropIfExists('user_folios');
    }
}
