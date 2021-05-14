<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmtSalaryTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emt_salary_tbls', function (Blueprint $table) {
            $table->id("emp_salary_id");
            $table->integer("emp_id");
            $table->integer("salary");
            $table->tinyInteger("salary_currency");
            $table->date("salary_date_fm");
            $table->date("salary_date_to")->nullable();
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
        Schema::dropIfExists('emt_salary_tbls');
    }
}
