<?php

namespace App\Http\Controllers\dani_08;

use App\Http\Controllers\Controller;
use App\Models\dani_08\Sekolah as Dani_08Sekolah;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Sekolah = Dani_08Sekolah::all();
        $Sekolah = Dani_08Sekolah::orderBy('nama', 'asc')->paginate(3); 
        return view('dani_08.index',  compact('Sekolah')) 
            ->with('i', (request()->input('page', 1)-1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dani_08.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'notelp' => 'required',
            'jumlahsiswa' => 'required',
            'akreditasi' => 'required',
        ]);

        // fungsi eloquent untuk menambah data
        Dani_08Sekolah::create($request->all());


        // jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('dani_08.index')
            ->with('success', 'Sekolah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan detail data dengan menemukan/berdasarkan ID
        $Sekolah = Dani_08Sekolah::find($id);
        return view('dani_08.detail', compact('Sekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Sekolah = Dani_08Sekolah::find($id);
        return view('dani_08.edit', compact('Sekolah'));
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
            'alamat' => 'required',
            'email' => 'required',
            'notelp' => 'required',
            'jumlahsiswa' => 'required',
            'akreditasi' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Dani_08Sekolah::find($id)->update($request->all());


        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('dani_08.index')
            ->with('success', 'sekolah Berhasil Diupdate');

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
        Dani_08Sekolah::find($id)->delete();
        return redirect()->route('dani_08.index')
            -> with('success', 'sekolah Berhasil Dihapus');
    }
}
