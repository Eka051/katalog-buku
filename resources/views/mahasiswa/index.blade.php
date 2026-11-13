<!-- <div>
    <h2>{{ $judul }}</h2>
    <p>{{ $nama ?? 'Tidak Ada Nama' }}</p>
    @foreach ($data as $mhs)
        <p>{{ $mhs ?? 'Tidak Ada Data' }}</p>
    @endforeach

    @foreach ($nilai as $value)
        @if ($value >= 80)
            <span>A</span>
        @elseif ($value >= 70)
             <span>B</span>
        @else
            <span>C</span>
        @endif
    @endforeach
    

</div> -->

@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa Fasilkom</h1>
@endsection