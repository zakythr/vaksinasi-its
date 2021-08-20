<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vaksinator;

class VaksinatorController extends Controller
{
    //

    public function index()
    {
        $posts = Vaksinator::orderBy('nama', 'ASC')->get();
        return view('admin/vaksinator', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = new Vaksinator;
        $post->nama = $request->input('nama');
        $post->save();

        return redirect('/vaksinator');
    }
}
