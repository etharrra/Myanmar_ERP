<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionMstTbl extends Model
{
    use HasFactory;

    protected $table = "position_mst_tbls";
    protected $fillable = ["position_id", "position_name", "reg_dt", "reg_by", "last_update_dt", "last_updated_by"];
}
