<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    // guarded => kolom kolom yang tidak boleh diisi secara manual
    // protected $guarded = [
    //     'karyawan_id',
    //     'created_at',
    //     'updated_at',
    // ];

    // fillable => kolom kolom yang boleh diisi
    protected $fillable = [
        'nama'
    ];
}
