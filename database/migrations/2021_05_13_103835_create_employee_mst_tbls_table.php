<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeMstTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_mst_tbls', function (Blueprint $table) {
            $table->id("emp_id");
            $table->string("old_emp_id", 32)->nullable();
            $table->string("first_name", 64)->nullable();
            $table->string("mid_name", 64)->nullable();
            $table->string("last_name", 64);
            $table->date("dob");
            $table->string("father_name", 64);
            $table->string("mother_name", 64);
            $table->string("nrc", 24);
            $table->boolean("marital_status");
            $table->boolean("test_flg");
            $table->boolean("guest_flg");
            $table->string("permanent_addr", 256);
            $table->string("current_addr", 256);
            $table->string("tel_1", 16)->nullable();
            $table->string("tel_1_comment", 128)->nullable();
            $table->string("tel_2", 16)->nullable();
            $table->string("tel_2_comment", 128)->nullable();
            $table->string("tel_3", 16)->nullable();
            $table->string("tel_3_comment", 128)->nullable();
            $table->string("office_email", 64);
            $table->date("joined_date");
            $table->date("resigned_date")->nullable();
            $table->dateTime("reg_dt");
            $table->integer("reg_by");
            $table->dateTime("last_update_dt");
            $table->integer("last_updated_by");
            $table->text("remarks")->nullable();
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
        Schema::dropIfExists('employee_mst_tbls');
    }
}
