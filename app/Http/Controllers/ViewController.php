<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('praktikum_2');
    }
    function showETSPWEBB()
    {
        return view('etspwebb');
    }
    function showForm()
    {
        return view('show');
    }
    function rentalfunc(Request $request)
    {
        return view('tugasphp');
    }
}
