<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view('home', ['nama'=> 'Luthfi Asmara']);
    }

    
    public function about()
    {
        return view('about', ['nama'=> 'Arsen Kamal']);
    }
}
