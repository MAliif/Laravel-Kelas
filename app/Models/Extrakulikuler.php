<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extrakulikuler extends Model
{
    use HasFactory;
   
    public function pelajars()
    {
        return $this->belongsToMany(Student::class, 'student_extrakulikuler', 'extrakulikuler_id', 
        'student_id');
    }
}
