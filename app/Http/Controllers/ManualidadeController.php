<?php

namespace App\Http\Controllers;

use App\Models\Manualidade;
use Illuminate\Http\Request;

class ManualidadeController extends Controller
{
    public function index() 
    {
        return view('manualidades.index');
    }

    public function show(Manualidade $manualidade) 
    {
        return view('manualidades.show', [
            'manualidade' => $manualidade
        ]);
    }

    public function create()
    {
        return view('manualidades.create');
    }
}
