<?php

namespace App\Http\Controllers\shintya_28;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\shintya_28\AksesorisPakaian28;

class AksesorisPakaianController28 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua isi tabel
        $aksesoris = AksesorisPakaian28::get(); 

        $posts = AksesorisPakaian28::orderBy('id', 'desc')->paginate(6);
        return view('shintya_28.aksesoris.index', compact('aksesoris'));
        with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shintya_28.aksesoris.create');
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
            'gambar' => 'required',
            'bahan' => 'required',
            'harga' => 'required',
            'stok_awal' => 'required',
            'stok_akhir' => 'required',
        ]);
        
        AksesorisPakaian28::create($request->all());
        
        return redirect()->route('shintya_28.aksesoris.index')->with('success', 'Data Aksesoris Pakaian Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $aksesoris = AksesorisPakaian28::find($id);
         return view('shintya_28.aksesoris.detail', compact('aksesoris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   
        $aksesoris = AksesorisPakaian28::find($id);
        return view('shintya_28.aksesoris.edit', compact('aksesoris'));
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
            'nama' => 'required',
            'gambar' => 'required',
            'bahan' => 'required',
            'harga' => 'required',
            'stok_awal' => 'required',
            'stok_akhir' => 'required',
        ]);
        
        AksesorisPakaian28::find($id)->update($request->all());
        
        return redirect()->route('shintya_28.aksesoris.index')->with('success', 'Data Aksesoris Pakaian Berhasil Diupdate');
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
         AksesorisPakaian28::find($id)->delete();
         return redirect()->route('shintya_28.aksesoris.index')-> with('success', 'Data Aksesoris Pakaian Berhasil Dihapus');
    }
}
