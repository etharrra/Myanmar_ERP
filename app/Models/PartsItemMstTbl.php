<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsItemMstTbl extends Model
{
    use HasFactory;

    protected $table = "parts_item_mst_tbls";
    protected $fillable = ["maker_item_id", "inhouse_item_id", "category_id", "item_name", "reg_dt", "reg_by", "last_update_dt", "last_updated_by"];
}
