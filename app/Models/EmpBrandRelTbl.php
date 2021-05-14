<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpBrandRelTbl extends Model
{
    use HasFactory;

    protected $table = "emp_brand_rel_tbls";
    protected $fillable = ["emp_id", "brand_id", "date_fm", "date_to", "reg_dt", "reg_by", "last_update_dt", "last_updated_by"];
}
