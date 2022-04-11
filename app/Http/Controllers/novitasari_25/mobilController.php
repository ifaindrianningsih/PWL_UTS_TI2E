<?php

namespace App\Http\Controllers\novitasari_25;

use Illuminate\Http\Request;

class mobilController extends Controller
{
    public function index()
    {
        $mobil = $mobil = DB::table('mobil')->get();
        $posts = Mobil::orderBy('id_mobil', 'desc')->paginate(6);
        return view('mobil.index', compact('mobil'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('mobil.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'id_mobil' => 'required',
        'nama' => 'required',
        'spesifikasi' => 'required',
        'kelebihan' => 'required',
        'kekurangan' => 'required',
    ]);
        Mobil::create($request->all());
        return redirect()->route('mobil.index')
        ->with('success', 'Mobil Berhasil Ditambahkan');
    }
    public function show($id_mobil)
    {
        $Mobil = Mobil::find($id_mobil);
        return view('mobil.detail', compact('Mobil'));
     }

}
