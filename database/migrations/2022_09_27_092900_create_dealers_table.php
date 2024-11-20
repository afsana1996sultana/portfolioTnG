<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('name');
            $table->string('company_name');
            $table->string('address');
            $table->string('district');
            $table->string('police_station');
            $table->string('notes');
            $table->string('phone');
            $table->string('email');
            $table->string('passport_img');
            $table->string('nid');
            $table->string('trade_license');
            $table->string('tin');
            $table->string('visiting_card');
            $table->string('did_copy');
            $table->softDeletes();
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
        Schema::dropIfExists('dealers');
    }
}
