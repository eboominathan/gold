<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pin_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pin_no');
            $table->string('serial_no');
            $table->string('generated_no');
            $table->unsignedInteger('user_id')->comment('Ref to Users');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('pin_details');
    }
}
