<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilaikuliah
        // $nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);
        // mengirim data nilaikuliah ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah blueray
    public function tambah()
    {
        // memanggil view tambah
        return view('nilaikuliah.tambah');
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilai,
            'SKS' => $request->sks
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah'); //tidak return view, karena jadi tidak fleksibel

    }
}
