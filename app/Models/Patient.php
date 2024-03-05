<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function surgeries()
    {
        return $this->hasMany(Surgery::class);
    }   

    public function healthcare()
    {
        return $this->belongsTo(Healthcare::class);
    }
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
