<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomosController extends Controller
{
    public function index() 
    {
        return view('somos.index');
    }
}
