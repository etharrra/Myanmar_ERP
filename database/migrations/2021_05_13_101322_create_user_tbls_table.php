<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tbls', function (Blueprint $table) {
            $table->string("user_id", 256);
            $table->string("password", 256);
            $table->string("otp", 256)->nullable();
            $table->string("email_addr", 64);
            $table->string("sms_no", 32);
            $table->integer("emp_id");
            $table->boolean("activation_fig");
            $table->boolean("reset_fig");
            $table->string("twp_pwd", 256)->nullable();
            $table->dateTime("twp_pwd_expire_dt")->nullable();
            $table->dateTime("last_chg_pwd_dt");
            $table->dateTime("last_login_dt");
            $table->dateTime("reg_dt");
            $table->integer("reg_by");
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
        Schema::dropIfExists('user_tbls');
    }
}
