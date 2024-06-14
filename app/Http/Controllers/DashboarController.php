<?php

namespace App\Http\Controllers;

use App\Models\Manualidade;
use App\Models\Pinata;
use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function index()
    {
        $pinatas = Pinata::orderBy('id', 'desc')->limit(5)->get();
        $manualidades = Manualidade::orderBy('id', 'desc')->limit(5)->get();
        return view('dashboard', [
            'pinatas' => $pinatas,
            'manualidades' => $manualidades
        ]);
    }
}

