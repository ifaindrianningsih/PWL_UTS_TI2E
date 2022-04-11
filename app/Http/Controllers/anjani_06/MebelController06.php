<?php

namespace App\Http\Controllers\anjani_06;

use Illuminate\Http\Request;
use App\Models\anjani_06\Mebel_06;

class MebelController06 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $mebel_06 = Mebel_06::all(); // Mengambil semua isi tabel
        $mebel_06= Mebel_06::orderBy('nama', 'asc')->paginate(3); 
            return view('anjani_06.index',  compact('mebel_06')) 
                ->with('i', (request()->input('page', 1)-1)* 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anjani_06.create');

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
            'nama' => 'required',
            'bahan' => 'required',
            'jenis' => 'required',
            'kualitas' => 'required',
            'harga' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Mebel_06::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mebel_06.index')
        ->with('success', 'Mebel Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mebel_06 = Mebel_06::find($id);
        return view('anjani_06.detail', compact('mebel_06'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mebel_06 = Mebel_06::find($id);
        return view('anjani_06.edit', compact('mebel_06'));

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
            'nama' => 'required',
            'bahan' => 'required',
            'jenis' => 'required',
            'kualitas' => 'required',
            'harga' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Mebel_06::find($id)->update($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mebel_06.index')
        ->with('success', 'Mebel Berhasil Diupdate');
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
        Mebel_06::find($id)->delete();
        return redirect()->route('mebel_06.index')
        -> with('success', 'Mebel Berhasil Dihapus');

    }
}
