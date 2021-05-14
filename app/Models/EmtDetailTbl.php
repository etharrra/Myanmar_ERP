<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmtDetailTbl extends Model
{
    use HasFactory;

    protected $table = "emt_detail_tbls";
    protected $fillable = ["emp_detail_id", "branch_id", "dept_id", "section_id", "emp_id", "position_id", "date_fm", "date_to", "reg_dt", "reg_by", "last_update_dt", "last_updated_by", "remarks"];
}
