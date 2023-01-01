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
        Schema::create('orderdetalls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->double('last_price');
            $table->tinyinteger('quentity');
            $table->tinyinteger('discount');
            
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
        Schema::dropIfExists('orderdetall');
    }
};
