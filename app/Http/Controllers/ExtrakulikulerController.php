<?php

namespace App\Http\Controllers;
use App\Models\Extrakulikuler;

use Illuminate\Http\Request;

class ExtrakulikulerController extends Controller
{
    public function index() 
    {
     $eskul = Extrakulikuler::get();
     // with('pelajars')->
     // nama bladenya
     return view('extrakulikuler', ['eskulList' => $eskul]);
    }

    public function show($id) 
    {
       // "with(['class'])" dari model student
       $eskul = Extrakulikuler::with('pelajars')->findOrFail($id);
       return view('eskul-detail', ['eskulkeren' => $eskul]);
    }
}
