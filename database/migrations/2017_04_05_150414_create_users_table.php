<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_login',20)->unique();
            $table->string('user_pass');
            $table->string('user_nickname');
            $table->string('user_email');
            $table->char('user_type',2)->default('1');
            $table->char('user_icon',2)->default('1');;
            $table->integer('level')->default(1);;
            $table->char('order1',2)->default('00');;
            $table->char('order2',3)->default('000');;
            $table->char('order3',4)->default('0000');;
            $table->char('order4',5)->default('00000');;
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
