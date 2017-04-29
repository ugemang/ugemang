<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            $table->increments('document_id');
            //$table->bigInteger('module_id')->default('0');
            $table->bigInteger('category_id')->default('0'); //#bigint(11) NOT NULL DEFAULT '0',
            //$table->string('lang_code')->default(''); //#varchar(10) NOT NULL DEFAULT '',
            $table->char('is_notice')->default('N'); //#char(1) NOT NULL DEFAULT 'N',
            $table->string('title', 250); //#varchar(250) DEFAULT NULL,
            $table->longtext('content'); //#longtext NOT NULL,
            $table->bigInteger('readed_count')->default('0'); //#bigint(11) NOT NULL DEFAULT '0',
            $table->bigInteger('voted_count')->default('0'); //#bigint(11) NOT NULL DEFAULT '0';
            $table->bigInteger('blamed_count')->default('0');  //#bigint(11) NOT NULL DEFAULT '0';
            $table->bigInteger('comment_count')->default('0');  //#bigint(11) NOT NULL DEFAULT '0';
            $table->bigInteger('trackback_count')->default('0');  //#bigint(11) NOT NULL DEFAULT '0'; #??
            $table->bigInteger('uploaded_count')->default('0');  //#bigint(11) NOT NULL DEFAULT '0';
            $table->string('password', 60)->default(null);  //#varchar(60) DEFAULT NULL;
            $table->string('user_login', 80)->default(null);  //#varchar(80) DEFAULT NULL;
            $table->string('user_nickname', 80); //#varchar(80) NOT NULL;
            //$table->string('nick_name', 80); //#varchar(80) NOT NULL;
            //$table->bigInteger('member_id'); //#bigint(11) NOT NULL;
            //$table->string('email_address', 250); //#varchar(250) NOT NULL;
            //$table->string('homepage', 250); //#varchar(250) NOT NULL;
            $table->text('tags'); //#text;
            $table->text('extra_vars'); //#text;
            //$table->string('regdate', 14); //#varchar(14) DEFAULT NULL;
            //$table->string('last_update', 14); //#varchar(14) DEFAULT NULL;
            //$table->string('last_updater', 80); //#varchar(80) DEFAULT NULL;
            $table->string('ipaddress', 128); //#varchar(128) NOT NULL;
            //$table->bigInteger('list_order')->nullable(); //#bigint(11) NOT NULL; #??
            //$table->bigInteger('update_order')-> nullable(); //#bigint(11) NOT NULL; #??
            //$table->char('allow_trackback',1)->default('Y'); //#char(1) NOT NULL DEFAULT 'Y'; #allow to put comment
            //$table->char('notify_message',1)->default('N'); //#char(1) NOT NULL DEFAULT 'N';  #block message
            $table->string('status', 20)->default('PUBLIC');  //#varchar(20) DEFAULT 'PUBLIC';  #public
            $table->string('comment_status',20)->default('ALLOW'); //#varchar(20) DEFAULT 'ALLOW' #deny
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
        Schema::dropIfExists('posts');
    }
}
