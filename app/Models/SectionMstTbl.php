<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionMstTbl extends Model
{
    use HasFactory;

    protected $table = "section_mst_tbls";
    protected $fillable = ["section_id", "dept_id", "section_name", "reg_dt", "reg_by", "last_update_dt", "last_updated_by"];
}
