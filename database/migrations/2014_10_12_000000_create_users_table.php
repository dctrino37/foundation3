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
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('role')->nullable();
            $table->string('mobile', 15)->nullable();
            $table->integer('otp')->nullable();
            $table->integer('otp_flag')->nullable()->comment('1-used, 0=unused')->default(0);
            $table->timestamp('otp_time')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 355)->nullable();
            $table->integer('status')->nullable()->comment('1-active, 0=deactive');
            $table->integer('company_id')->nullable();
            $table->integer('logged_in')->nullable();
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
