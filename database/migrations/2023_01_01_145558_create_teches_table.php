<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teches', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('starting_date');
            $table->string('product_type');
            $table->text('product_description');
            $table->string('industry');
            $table->string('request_form');
            $table->string('stakholders');
            $table->string('market_research');
            $table->string('product_definition');
            $table->string('product_roadmap');
            $table->string('product_status');
            $table->string('diginext_stock');
            $table->integer('total_income');
            $table->string('company_registration');
            $table->string('valuation');
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
        Schema::dropIfExists('teches');
    }
};
