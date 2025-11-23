<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = "specialties";

    protected $fillable = ['name', 'description', 'icon', 'status'];

    public function getIsActiveAttribute()
    {
        return $this->status == 1 ? 'Active' : 'Inactive';
    }
}
