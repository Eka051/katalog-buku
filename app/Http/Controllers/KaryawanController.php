<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        $karyawans = Karyawan::all();
        
        return view('karyawan.index', compact('karyawans'));
    }
}
