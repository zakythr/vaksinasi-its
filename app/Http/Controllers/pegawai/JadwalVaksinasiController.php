<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalVaksinasiController extends Controller
{
    //
    public function index()
    {
        return view('pegawai/vaksinasi');
    }
}
