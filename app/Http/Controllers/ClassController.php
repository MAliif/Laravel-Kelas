<?php

namespace App\Http\Controllers;

// Harus ngasih tau modelsnya
use App\Models\ClassRoom;
use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    //"index ()" nama buat web yang di route
    {   
        // Lazy load
        // $class = ClassRoom::all()

        // Eager Load
        // $class = ClassRoom::with('nama func model')->get();


        // $class = "ClassRoom"::all(); yang dipetik dua itu model
        $class = ClassRoom::get();
        // ('studentsalif', 'homeroomTeacher')->
        // 'classroom' namabladenya
        return view('classroom', ['classList' => $class]);
    }

    public function show($id) 
    {
       // "with(['class'])" dari model student
       $class = Classroom::with('studentsalif', 'homeroomTeacher')->findOrFail($id);
       return view('class-detail', ['kelaskeren' => $class]);
    }
}
