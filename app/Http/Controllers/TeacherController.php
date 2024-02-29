<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    //"index ()" nama buat web yang di route
    {   
        $teacher = Teacher::all();
        // 'classroom' namabladenya
        // "$teacher" harus sesuai sama atasnya
        return view('teacher', ['teacherList' => $teacher]);
    }

    public function show($id)
    {
        // with('class.studentsalif') dari function model bebas modelnya dan harus relationship
        $teacher = Teacher::with('class.studentsalif')
                            ->findOrFail($id);
        return view('teacher-detail', ['teacher2' => $teacher]);
    }
}
