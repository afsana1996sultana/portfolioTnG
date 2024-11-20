<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('child_menu_id');
            $table->string('title');
            $table->string('slug');
            $table->number('price')->nullable();
            $table->longText('description')->nullable();
            $table->text('fitureImg')->nullable();
            $table->string('multiImg')->nullable();
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
        Schema::dropIfExists('products');
    }
}