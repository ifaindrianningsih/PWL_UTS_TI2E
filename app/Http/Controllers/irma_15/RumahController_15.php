<?php

namespace App\Http\Controllers\irma_15;

use Illuminate\Http\Request;
use App\Models\irma_15\rumah_15;

class RumahController_15 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $rumah_15 = rumah_15::all(); // Mengambil semua isi tabel
        $rumah_15= rumah_15::orderBy('pemilik', 'asc')->paginate(3); 
            return view('rumah_15.index',  compact('rumah_15')) 
                ->with('i', (request()->input('page', 1)-1)* 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rumah_15.create');

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
            'pemilik' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
            'warna' => 'required',
            'tipe' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        rumah_15::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('rumah_15.index')
        ->with('success', 'Rumah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rumah_15 = rumah_15::find($id);
        return view('irma_15.detail', compact('rumah_15'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rumah_15 = rumah_15::find($id);
        return view('irma_15.edit', compact('rumah_15'));

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
            'pemilik' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
            'warna' => 'required',
            'tipe' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        rumah_15::find($id)->update($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('rumah_15.index')
        ->with('success', 'Rumah Berhasil Diupdate');
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
        rumah_15::find($id)->delete();
        return redirect()->route('rumah_15.index')
        -> with('success', 'Rumah Berhasil Dihapus');

    }
}