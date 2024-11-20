<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childmenus', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->integer('submenu_id');
            $table->string('childmenu_name');
            $table->string('childmenu_url');
            $table->tinyinteger('status')->default(1);
            $table->string('icon')->nullable();
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
        Schema::dropIfExists('childmenus');
    }
}
