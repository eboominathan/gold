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
            $table->string('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();            
            $table->string('password');
            $table->string('hidden');
            $table->string('type');
            $table->rememberToken();
            $table->unsignedInteger('sale_point_id')->default(0);
            $table->unsignedInteger('referal_id')->default(0);
            $table->tinyInteger('email_sent')->default(0);
            $table->tinyInteger('loggedin')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->unsignedInteger('created_by')->nullable()->comment('Ref to Users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedInteger('updated_by')->nullable()->comment('Ref to Users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
