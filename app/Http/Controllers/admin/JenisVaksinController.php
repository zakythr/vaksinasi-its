<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JenisVaksin;

class JenisVaksinController extends Controller
{
    //
    public function index()
    {
        $posts = JenisVaksin::orderBy('nama', 'ASC')->get();
        return view('admin/jenis-vaksin', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = new JenisVaksin;
        $post->nama = $request->input('nama');
        $post->save();

        return redirect('/jenisvaksin');
    }
}
