<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmtDetailTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emt_detail_tbls', function (Blueprint $table) {
            $table->id("emp_detail_id");
            $table->integer("branch_id");
            $table->integer("dept_id");
            $table->integer("section_id")->nullable();
            $table->integer("emp_id");
            $table->integer("position_id");
            $table->date("date_fm");
            $table->date("date_to")->nullable();
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
        Schema::dropIfExists('emt_detail_tbls');
    }
}
