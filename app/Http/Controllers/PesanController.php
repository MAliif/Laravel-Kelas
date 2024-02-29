<?php

namespace App\Http\Controllers;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index() 
    {
     $pesan = Pesan::get();
     // with('pelajars')->
     // nama bladenya
     return view('pesan', ['pesankeren' => $pesan]);
    }
}
