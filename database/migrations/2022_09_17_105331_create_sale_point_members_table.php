<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalePointMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_point_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->date('date')->nullable();
            $table->date('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('mobile')->nullable();          
            $table->string('aadhaar_no')->nullable();
            $table->string('acc_holder_name')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('s_no')->nullable();
            $table->string('pin_no')->nullable();
            $table->string('sponsor_id')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('nominee_reltnshp')->nullable();
            $table->unsignedInteger('user_id')->comment('Ref to Users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('sale_point_members');
    }
}
