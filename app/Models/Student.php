<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'alifs';

    // CREATE 
    protected $fillable = [
        'name',
        'gender',
        'nis',
        'class_id',
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extrakulikulers()
    {
        // 'student_extrakulikuler' nama tabel
        // 'student_id', 'extrakulikuler_id' nama colom yang ada di tabel tersebut makannya pake koma
        return $this->belongsToMany(Extrakulikuler::class, 'student_extrakulikuler', 'student_id', 
        'extrakulikuler_id');
    }






    // // "$fillable" untuk memasukan data ke dalam tabel
    // protected $fillable = [
    //     'name', 'gender', 'nis', 'class_id' 
    // ];

}
