<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionMstTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_mst_tbls', function (Blueprint $table) {
            $table->id("section_id");
            $table->integer("dept_id");
            $table->string("section_name", 64);
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
        Schema::dropIfExists('section_mst_tbls');
    }
}
