<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'job_title', 'phone', 'email', 'status', 'experience', 'about'];
}
