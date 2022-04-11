<?php

namespace App\Http\Controllers\della_10;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\della_10\Tas_10;

class TasController_10 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tas_10 = Tas_10::orderBy('id', 'desc')->paginate(3);
        return view('della_10.index', compact('tas_10'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('della_10.create');
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
            'merkTas' => 'required',
            'harga' => 'required',
            'stok' => 'required', 
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);
        //fungsi eloquent untuk menambah data 
        Tas_10::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('della_10.index')
        ->with('success', 'Tas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Tas_10 = Tas_10::find($id);
        return view('della_10.detail', compact('Tas_10'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Tas_10 = Tas_10::find($id);
        return view('della_10.edit', compact('Tas_10'));
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
            'merkTas' => 'required',
            'harga' => 'required',
            'stok' => 'required', 
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);
       //fungsi eloquent untuk mengupdate data inputan kita 
       Tas_10::find($id)->update($request->all());

       //jika data berhasil diupdate, akan kembali ke halaman utama 
       return redirect()->route('della_10.index')
       ->with('success', 'Tas Berhasil Diupdate');
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
        Tas_10::find($id)->delete();
        return redirect()->route('della_10.index')
        -> with('success', 'Tas Berhasil Dihapus');

    }
}
