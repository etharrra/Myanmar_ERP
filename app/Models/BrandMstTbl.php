<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandMstTbl extends Model
{
    use HasFactory;

    protected $table = "brand_mst_tbls";
    protected $fillable = ["brand_id", "brand_name", "logo_L_path", "logo_M_path", "logo_S_path", "ho_addr", "ho_country", "ho_tel", "ho_email", "ho_incharge_first_name", "ho_incharge_mid_name", "ho_incharge_last_name", "ho_incharge_tel", "ho_incharge_email", "so_addr", "so_country", "so_tel", "so_email", "so_incharge_first_name", "so_incharge_mid_name", "so_incharge_last_name", "so_incharge_tel", "so_incharge_email", "reg_dt", "reg_by", "last_update_dt", "last_updated_by"];
}
