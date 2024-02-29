<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_ClinkPatientReg extends Model
{
   
    public $timestamps = false;
    use HasFactory;
    protected $table = 'tbl_clink_patient_regs'; // If your table name is not the plural of the model
    
    protected $primaryKey = 'patient_no'; // If your primary key is not 'id'

    protected $fillable = ['P_name', 'P_address','P_place','P_dob','P_age','P_gender','P_regdate'];
}
