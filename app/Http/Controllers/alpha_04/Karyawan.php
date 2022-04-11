<?php

namespace App\Http\Controllers;

use App\Models\Alpha04\Karyawan as Alpha04Karyawan;
use Database\Seeders\jabatanSeeder04;
use Illuminate\Http\Request;

class Karyawan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswa = Alpha04Karyawan::with('jabatan')->get();
        $post = Alpha04Karyawan::latest();
        if (request('search')) {
            $post->where('nama', 'like', '%' . request('search') . '%')->orWhere('id_karaywan','like','%' . request('search').'%');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatan04=jabatan04::all();
        return view('mahasiswa.create',['kelas'=>$jabatan04]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nim' => 'required|digits_between:8,10|unique:mahasiswa,nim',
            'nama' => 'required|string',
            'kelas_id' => 'required',
            'jurusan' => 'required|string|max:25',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'tanggal_lahir' => 'required',
        ]);

        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')
         ->with('success', 'karyawan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Karyawan = Karyawan::with('jabatan')->where('id_karyawan',$id_karyawan)->first();

        return view('karyawan.detail', ['Karyawan => $Karyawan']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $karyawan=Karyawan::with('Karyawan')->where('id_Karyawan',$id_Karyawan)->first();
        $kelas=Karyawan::all();
       return view('Karyawan.edit', compact('Karyawan','jabatan'));
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
        //
        $data= $request->validate([
            'nim' => 'required|digits_between:8,10',
            'nama' => 'required|string',
            'kelas_id' => 'required',
            'jurusan' => 'required|string|max:25',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'tanggal_lahir' => 'required',
        ]);
        Karyawan::where('id_karyawan', $id_karyawan)->update($data);

        return redirect()->route('karyawan.index')
            ->with('success', 'karyawan Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Karyawan::where('id_Karyawan',$id_Karyawan)->delete();
        return redirect()->route('Karyawan.index')
            -> with('success', 'Karyawan Berhasil Dihapus');
    }
}
