<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswasController extends Controller
{
    public function data_mahasiswa(){
        $halaman ='data_mahasiswa';
        return view('mahasiswas/data_mahasiswa', compact('halaman'));
    }

    public function lihat_data_mahasiswa(){
        $halaman ='data_mahasiswa';
        $mahasiswa = ['Dinda',
                'Cahya',
                'Nur',
                'Santoso'
    ];
    return view('mahasiswas/lihat_data_mahasiswa', compact('halaman','mahasiswa'));
    }

    public function lihat_data_mahasiswa2() {
        $mahasiswa = ['Dinda',
        'Cahya',
        'Nur',
        'Santoso'
    ];
        return view('mahasiswas/lihat_data_mahasiswa2')->with('mahasiswa',$mahasiswa);
    }

    public function input_mahasiswa() {
        $halaman ='input_mahasiswa';
        return view('mahasiswas/input_mahasiswa', compact('halaman'));
    }

    public function store(Request $request) {
        $mahasiswa = $request->all();
        return $mahasiswa;
    }
}
