<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmtSalaryTbl extends Model
{
    use HasFactory;

    protected $table = "emt_salary_tbls";
    protected $fillable = ["emp_salary_id", "emp_id", "salary", "salary_currency", "salary_date_fm", "salary_date_to", "reg_dt", "reg_by", "last_update_dt", "last_updated_by", "remarks"];
}
