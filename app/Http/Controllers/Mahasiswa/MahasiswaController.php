<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $judul = 'Daftar Mahasiswa';
        $data = ['Saniya', 'Sari', 'Dyo'];
        $nilai = [80, 65, 75];

        return view('mahasiswa.index', compact('judul', 'data', 'nilai'));
    }
}
