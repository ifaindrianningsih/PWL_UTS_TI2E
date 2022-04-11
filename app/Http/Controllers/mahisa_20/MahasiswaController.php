<?php

namespace App\Http\Controllers\mahisa_20;

use App\Http\Controllers\Controller;
use App\Models\mahisa_20\Mahasiswa as Mahisa_20Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $mahasiswas = Mahisa_20Mahasiswa::paginate(5);
        $posts = Mahisa_20Mahasiswa::orderBy('Nim', 'desc')->paginate(6);
        return view('mahisa_20.index', compact('mahasiswas', 'posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahisa_20.create');
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
            'Nim' => 'required',
            'Nama' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
            'No_Handphone' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Mahisa_20Mahasiswa::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nim)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Mahasiswa = Mahisa_20Mahasiswa::find($Nim);
        return view('mahisa_20.detail', compact('Mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Mahasiswa = Mahisa_20Mahasiswa::find($Nim);
        return view('mahisa_20.edit', compact('Mahasiswa'));
    }


    public function update(Request $request, $Nim)
    {
        $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
            'No_Handphone' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Mahisa_20Mahasiswa::find($Nim)->update($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahisa_20.index')->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nim)
    {
        Mahisa_20Mahasiswa::find($Nim)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $mahasiswas = Mahisa_20Mahasiswa::where('Nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('mahisa_20.index', compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
