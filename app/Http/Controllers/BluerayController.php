<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BluerayController extends Controller
{
    public function index()
    {
    	// mengambil data dari table blueray
    	// $blueray = DB::table('blueray')->get();
        $blueray = DB::table('blueray')->paginate(10);
    	// mengirim data blueray ke view index
    	return view('blueray.index',['blueray' => $blueray]);
    }

    // method untuk menampilkan view form tambah blueray
    public function tambah()
{
	// memanggil view tambah
	return view('blueray.tambah');
}

// method untuk insert data ke table blueray
public function store(Request $request)
{
    // insert data ke table blueray
    DB::table('blueray')->insert([
        'merkblueray' => $request->merk,
        'stockblueray' => $request->stock,
        'tersedia' => $request->tersedia
    ]);
    // alihkan halaman ke halaman blueray
    return redirect('/blueray'); //tidak return view, karena jadi tidak fleksibel

}

// method untuk edit data blueray
public function edit($id)
{
    // mengambil data blueray berdasarkan id yang dipilih
    $blueray = DB::table('blueray')->where('kodeblueray', $id)->get();
    // passing data blueray yang didapat ke view edit.blade.php
    return view('blueray.edit', ['blueray' => $blueray]);
}

public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $blueray = DB::table('blueray')->where('kodeblueray',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('blueray.detail',['blueray' => $blueray]);

    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('blueray')->where('kodeblueray',$request->id)->update([
            'merkblueray' => $request->merk,
            'stockblueray' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/blueray');
    }
        // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('blueray')->where('kodeblueray',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/blueray');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$blueray = DB::table('blueray')->where('merkblueray','like',"%".$cari."%")->paginate();

    		// mengirim data pegawai ke view index
		return view('blueray.index',['blueray' => $blueray]);

	}

}
