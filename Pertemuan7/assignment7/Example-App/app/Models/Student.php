<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function department(){
        return $this->belongsTo('App\Models\Department');
    }
    public function details(){
        return $this->hasOne('App\Models\Detail');
    }
}