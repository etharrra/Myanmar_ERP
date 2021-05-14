<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsCategoryMstTbl extends Model
{
    use HasFactory;

    protected $table = "parts_category_mst_tbls";
    protected $fillable = ["category_id", "brand_id", "category_name", "reg_dt", "reg_by", "last_update_dt", "last_updated_by"];
}
