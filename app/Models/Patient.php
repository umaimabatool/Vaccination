<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Is accessor se child ka real name drop-down mein automatic show hone lagega
    public function getNameAttribute()
    {
        return $this->attributes['child_name'] 
            ?? $this->attributes['patient_name'] 
            ?? $this->attributes['name'] 
            ?? $this->attributes['first_name'] 
            ?? 'Patient #'.$this->id;
    }
}