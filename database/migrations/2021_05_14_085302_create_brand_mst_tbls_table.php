<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandMstTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_mst_tbls', function (Blueprint $table) {
            $table->id("brand_id");
            $table->string("brand_name", 64);
            $table->string("logo_L_path", 256);
            $table->string("logo_M_path", 256);
            $table->string("logo_S_path", 256);
            $table->string("ho_addr", 256)->nullable();
            $table->string("ho_country", 64)->nullable();
            $table->string("ho_tel", 32)->nullable();
            $table->string("ho_email", 64)->nullable();
            $table->string("ho_incharge_first_name", 64)->nullable();
            $table->string("ho_incharge_mid_name", 64)->nullable();
            $table->string("ho_incharge_last_name", 64)->nullable();
            $table->string("ho_incharge_tel", 32)->nullable();
            $table->string("ho_incharge_email", 64)->nullable();
            $table->string("so_addr", 256)->nullable();
            $table->string("so_country", 64)->nullable();
            $table->string("so_tel", 32)->nullable();
            $table->string("so_email", 64)->nullable();
            $table->string("so_incharge_first_name", 64)->nullable();
            $table->string("so_incharge_mid_name", 64)->nullable();
            $table->string("so_incharge_last_name", 64)->nullable();
            $table->string("so_incharge_tel", 32)->nullable();
            $table->string("so_incharge_email", 64)->nullable();
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
        Schema::dropIfExists('brand_mst_tbls');
    }
}
