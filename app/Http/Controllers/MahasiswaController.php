<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Andika Setia Pambudi',
            'ALexandra',
            'Michael',
            'David',
        ];

        return view('pages.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}