<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JadwalVaksin;
use App\Vaksinator;
use App\JenisVaksin;


class JadwalVaksinasiController extends Controller
{
    //
    public function index()
    {
        $posts = JadwalVaksin::all();
        return view('admin/vaksinasi', compact('posts'));
    }

    public function create()
    {
        $posts = Vaksinator::orderBy('nama', 'ASC')->get();
        $postss = JenisVaksin::orderBy('nama', 'ASC')->get();
        return view('admin/vaksinasi-add', compact('posts', 'postss'));
    }

    public function store(Request $request)
    {
        $post = new JadwalVaksin;
        $post->vaksinator = $request->input('vaksinator');
        $post->jenisvaksin = $request->input('jenisvaksin');
        $post->mulaidaftar = $request->input('tgl_mulai');
        $post->selesaidaftar = $request->input('tgl_selesai');
        $post->tglvaksin = $request->input('tgl_pelaksanaan');
        $post->sesi_vaksin_mulai = $request->input('sesi_mulai');
        $post->sesi_vaksin_selesai = $request->input('sesi_selesai');
        $post->lokasi = $request->input('lokasi');
        $post->kuota = $request->input('kuota');
        $post->save();

        return redirect('/jadwalvaksinasiadmin');
    }

    public function detail($id)
    {
        $post = JadwalVaksin::where('id',$id)->first();
        return view('admin/vaksinasi-detail', compact('post'));
    }

}
