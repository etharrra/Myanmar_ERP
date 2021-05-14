<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTbl extends Model
{
    use HasFactory;

    protected $table = "user_tbls";
    protected $fillable = ["user_id", "password", "otp", "email_addr", "sms_no", "emp_id", "activation_fig", "reset_fig", "twp_pwd", "twp_pwd_expire_dt", "last_chg_pwd_dt", "last_login_dt", "reg_dt", "reg_by"];
}
