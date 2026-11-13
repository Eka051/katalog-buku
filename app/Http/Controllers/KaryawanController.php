<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    // menampilkan data karyawan
    public function index(){
        $karyawans = Karyawan::all();

        return view('karyawan.index', compact('karyawans'));
    }

    // Memanggil modal tambah
    public function create()
    {
        return view('karyawan.create');
    }

    //fungsi untuk menyimpan data dan validasi data 
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:150',
            'alamat' => 'required|string|max:150'
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Data Berhasi ditambah');
    }

    // menampilkan modal yang di pilih
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    // mengupdate data 
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:150',
            'alamat' => 'required|string|max:150'
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Data Berhasil di Edit');
    }

    // menghapus data
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus');
    }
    

}
