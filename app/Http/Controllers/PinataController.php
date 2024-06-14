<?php

namespace App\Http\Controllers;

use App\Models\CategoriasPinata;
use App\Models\Pinata;
use Illuminate\Http\Request;

class PinataController extends Controller
{
    public function index() 
    {
        return view('pinatas.index');
    }

    public function show(Pinata $pinata) 
    {
        return view('pinatas.show', [
            'pinata' => $pinata
        ]);
    }

    public function create()
    {
        return view('pinatas.create');
    }

}
