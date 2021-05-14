<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptMstTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_mst_tbls', function (Blueprint $table) {
            $table->id("dept_id");
            $table->string("dept_name", 32);
            $table->dateTime("reg_dt");
            $table->integer("reg_by");
            $table->dateTime("last_update_dt");
            $table->integer("last_updated_by");
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
        Schema::dropIfExists('dept_mst_tbls');
    }
}
