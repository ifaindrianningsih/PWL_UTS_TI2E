<?php

namespace App\Http\Controllers\akmalia_03;

use App\Http\Controllers\controller;
use App\Models\akmalia_03\AnggotaPerpus_03;

use Illuminate\Http\Request;


class AnggotaPerpus_03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = AnggotaPerpus_03::paginate(2);
        return view('akmalia_03.index', compact('anggota')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('akmalia_03.create');
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
            'id' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tglLahir' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            ]);
            //fungsi eloquent untuk menambah data
            AnggotaPerpus_03::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('anggota.index')
            ->with('success', 'Anggota Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = AnggotaPerpus_03::find($id);
        return view('akmalia_03.detail', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = AnggotaPerpus_03::find($id);
        return view('akmalia_03.edit', compact('anggota'));
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
            'id' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tglLahir' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        AnggotaPerpus_03::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('anggota.index')
            ->with('success', 'Anggota Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        AnggotaPerpus_03::find($id)->delete();
        return redirect()->route('anggota.index')
                -> with('success', 'Anggota Berhasil Dihapus');
    }

    public function search(Request $request){
        $cari = $request -> cari;
        $anggota = AnggotaPerpus_03::where('nama','like',"%". $cari . "%") -> paginate(2);
        return view(view: 'akmalia_03.index', data: compact('anggota','cari'));
    }
}
