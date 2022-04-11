<?php

namespace App\Http\Controllers\nazela_23;

use App\Models\nazela_23\sepatu_23;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SepatuController_23 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sepatu = sepatu_23::all(); // Mengambil semua isi tabel
        $posts = sepatu_23::orderBy('id', 'desc')->paginate(6);
        //Tugas nomer 2 paginate
        $sepatu = sepatu_23::paginate(5);
        return view('nazela_23.index', compact('sepatu'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nazela_23.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
            $request->validate([
                'merk' => 'required',
                'warna' => 'required',
                'ukuran' => 'required',
                'jenis' => 'required',
                'harga' => 'required'
            ]);
        //fungsi eloquent untuk menambah data
            sepatu_23::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('nazela_23.index')
            ->with('success', 'Data Sepatu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sepatu = sepatu_23::find($id);
        return view('nazela_23.detail', compact('Sepatu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Sepatu = sepatu_23::find($id);
        return view('nazela_23.edit', compact('Sepatu'));
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
        //melakukan validasi data
        $request->validate([
            'merk' => 'required',
            'warna' => 'required',
            'ukuran' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            ]);
        //fungsi eloquent untuk mengupdate data inputan kita
            sepatu_23::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('nazela_23.index')
            ->with('success', 'Data Sepatu Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sepatu_23::find($id)->delete();
        return redirect()->route('nazela_23.index')
        ->with('success', 'Data Sepatu Berhasil Dihapus');
    }
}
