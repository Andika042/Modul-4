<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Andika Setia Pambudi';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}
