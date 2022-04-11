<?php

namespace App\Http\Controllers\bella_07;

use App\Http\Controllers\Controller;
use App\Models\bella_07\Tv as Bella_07Tv;
use App\Models\Tv;
use Illuminate\Http\Request;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $tv = Bella_07Tv::paginate(5); // Mengambil semua isi tabel
        $posts = Bella_07Tv::orderBy('id', 'asc')->paginate(5);
        return view('bella_07.index', compact('tv'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Find a listing of the searching.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $keyword = $request->search;

        $tv = Bella_07Tv::where('nama', 'like', "%" . $keyword . "%")
        ->orwhere('merk', 'like', "%" . $keyword . "%")
        ->orwhere('tahun', 'like', "%" . $keyword . "%")
        ->orwhere('asal', 'like', "%" . $keyword . "%")
        ->orwhere('harga', 'like', "%" . $keyword . "%")->paginate(5);
        return view('bella_07.cari', compact('tv'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bella_07.create');
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
            'merk' => 'required',
            'tahun' => 'required',
            'asal' => 'required',
            'harga' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Bella_07Tv::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('tv.index')
            ->with('success', 'Tv Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id Mahasiswa
        $Tv = Bella_07Tv::find($id);
        return view('bella_07.detail', compact('Tv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id Mahasiswa untuk diedit
        $Tv = Bella_07Tv::find($id);
        return view('bella_07.edit', compact('Tv'));
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
            'merk' => 'required',
            'tahun' => 'required',
            'asal' => 'required',
            'harga' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Bella_07Tv::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('tv.index')
            ->with('success', 'Tv Berhasil Diupdate');
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
        Bella_07Tv::find($id)->delete();
        return redirect()->route('tv.index')
            ->with('success', 'Tv Berhasil Dihapus');
    }

}
