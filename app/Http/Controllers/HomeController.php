<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$data = [
        //    'nama' => 'XiaoYan',
        //    'pekerjaan' => 'Kultivator',
        //];

        //return view('home')->with($data);

        $nama = "HaoChen";
        $pekerjaan = "PemburuIblis";
        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
