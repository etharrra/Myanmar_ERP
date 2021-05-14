<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsItemMstTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts_item_mst_tbls', function (Blueprint $table) {
            $table->string("maker_item_id", 32);
            $table->string("inhouse_item_id", 32);
            $table->integer("category_id");
            $table->string("item_name", 128);
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
        Schema::dropIfExists('parts_item_mst_tbls');
    }
}
