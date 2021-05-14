<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchMstTbl extends Model
{
    use HasFactory;

    protected $table = "branch_mst_tbls";
    protected $fillable = ["branch_id", "branch_name", "branch_addr", "head_office_flg", "exist_wh_flg", "reg_dt", "reg_by", "	last_update_dt", "last_updated_by"];
}
