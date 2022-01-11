<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_address', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->char('zipcode', 9);
            $table->string('address', 12);
            $table->string('number', 10);
            $table->string('complement', 255);
            $table->string('district', 255);
            $table->string('city', 50);
            $table->string('state', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_address');
    }
}
