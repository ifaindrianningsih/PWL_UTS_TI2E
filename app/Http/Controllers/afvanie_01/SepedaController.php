<?php

namespace App\Http\Controllers\afvanie_01;

use App\Models\afvanie_01\Sepeda;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sepeda = Sepeda::all(); // Mengambil semua isi tabel
        $posts = Sepeda::orderBy('id', 'desc')->paginate(6);
        return view('afvanie_01.index', compact('sepeda'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('afvanie_01.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'jenis_sepeda' => 'required',
            'merk' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);

        Sepeda::create($request->all());
        
        return redirect()->route('afvanie_01.index')
            ->with('success', 'Sepeda Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sepeda = Sepeda::find($id);
        return view('afvanie_01.detail', compact('Sepeda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Sepeda = Sepeda::find($id);
        return view('afvanie_01.edit', compact('Sepeda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'jenis_sepeda' => 'required',
            'merk' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);
        Sepeda::find($id)->update($request->all());
        return redirect()->route('afvanie_01.index')
            ->with('success', 'Sepeda Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sepeda::find($id)->delete();
        return redirect()->route('afvanie_01.index')
            ->with('success', 'Sepeda Berhasil Dihapus');
    }
}