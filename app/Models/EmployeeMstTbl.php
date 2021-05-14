<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeMstTbl extends Model
{
    use HasFactory;

    protected $table = "employee_mst_tbls";
    protected $fillable = ["emp_id", "old_emp_id", "first_name", "mid_name", "last_name", "dob", "father_name", "mother_name", "nrc", "marital_status", "test_flg", "guest_flg", "permanent_addr", "current_addr", "tel_1", "tel_1_comment", "tel_2", "tel_2_comment", "tel_3", "tel_3_comment", "office_email", "joined_date", "resigned_date", "reg_dt", "reg_by", "last_update_dt", "last_updated_by", "remarks"];
}
