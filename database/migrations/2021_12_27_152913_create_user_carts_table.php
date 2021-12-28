<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_carts', function (Blueprint $table) {
            $table->id();
            $table->string('seller_name');
            $table->string('seller_id');
            $table->string('buyer_name');
            $table->string('buyer_id');
            $table->string('game_name');
            $table->string('email');
            $table->string('status');
            $table->string('game_password');
            $table->string('security_q');
            $table->string('bkash_no');
            $table->string('game_id');
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
        Schema::dropIfExists('user_carts');
    }
}
