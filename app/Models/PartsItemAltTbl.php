<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsItemAltTbl extends Model
{
    use HasFactory;

    protected $table = "parts_item_alt_tbls";
    protected $fillable = ["maker_item_id", "alt_item_id", "flg", "reg_dt", "reg_by", "last_update_dt", "last_updated_by"];
}
