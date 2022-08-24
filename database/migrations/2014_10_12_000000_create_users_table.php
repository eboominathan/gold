<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();            
            $table->string('password');
            $table->string('type');
            $table->unsignedInteger('sale_point_id');
            $table->unsignedInteger('referal_id');
            $table->tinyInteger('email_sent');
            $table->tinyInteger('loggedin');
            $table->tinyInteger('status');
            $table->unsignedInteger('created_by')->nullable()->comment('Ref to Users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedInteger('updated_by')->nullable()->comment('Ref to Users');
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('users');
    }
}
