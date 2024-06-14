<?php

namespace App\Http\Controllers;

use App\Models\Pinata;
use App\Models\Manualidade;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function pinatas()
    {
        return view('admin.pinatas');
    }

    public function editPinata(Pinata $pinata)
    {
        return view('pinatas.edit', [
            'pinata' => $pinata
        ]);
    }
    
    public function manualidades()
    {
        return view('admin.manualidades');
    }

    public function editManualidad(Manualidade $manualidade)
    {
        return view('manualidades.edit', [
            'manualidade' => $manualidade
        ]);
    }
}
