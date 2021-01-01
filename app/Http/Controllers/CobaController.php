<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class CobaController extends Controller
{
    public function index()
    {
        $Mahasiswa = Mahasiswa::all();
        return view('coba', compact('Mahasiswa'));
    }

    
}
