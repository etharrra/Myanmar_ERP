<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsItemAltTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts_item_alt_tbls', function (Blueprint $table) {
            $table->string("maker_item_id", 32);
            $table->string("alt_item_id", 32);
            $table->boolean("flg");
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
        Schema::dropIfExists('parts_item_alt_tbls');
    }
}
