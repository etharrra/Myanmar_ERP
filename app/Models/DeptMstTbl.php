<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptMstTbl extends Model
{
    use HasFactory;

    protected $table = "dept_mst_tbls";
    protected $fillable = ["dept_id", "dept_name", "reg_dt", "reg_by", "last_update_dt", "last_updated_by"];
}
