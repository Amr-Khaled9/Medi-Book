<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['visit_type','notes','doctor_id','specialty_id','patient_id'] ;
}
