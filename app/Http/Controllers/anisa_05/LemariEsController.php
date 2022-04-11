<?php

namespace App\Http\Controllers\anisa_05;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\anisa_05\LemariEs;
use Illuminate\Support\Facades\DB;

class LemariEsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lemaries = $lemaries = DB::table('lemaries')->get(); // Mengambil semua isi tabel
        $posts = LemariEs::orderBy('merek', 'desc')->paginate(6);
        return view('anisa_05.index', compact('lemaries'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anisa_05.create');
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
            'merek' => 'required',
            'jenis' => 'required',
            'warna' => 'required',
            'jumlah_pintu' => 'required', 
            'berat' => 'required', 
        ]);


            //fungsi eloquent untuk menambah data
            LemariEs::create($request->all());

            //jika data berhasil ditambahkan, akan kembali ke halaman utama
                return redirect()->route('anisa_05.index')
                        ->with('success', 'Lemari Es Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($merek)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
             $lemaries = LemariEs::find($merek);
                    return view('anisa_05.detail', compact('lemaries'));
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
 $lemaries = DB::table('lemaries_anisa_05')->where('merek', $merek)->first();; 
 return view('anisa_05.edit', compact('lemaries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $merek)
    {
        //melakukan validasi data
 $request->validate([ 
    'merek' => 'required',
    'jenis' => 'required',
    'warna' => 'required',
    'jumlah_pintu' => 'required', 
    'berat' => 'required', 
    ]);


    //fungsi eloquent untuk mengupdate data inputan kita
 LemariEs::find($merek)->update($request->all()); 
 //jika data berhasil diupdate, akan kembali ke halaman utama
  return redirect()->route('anisa_05.index') 
  ->with('success', 'LemariEs Berhasil Diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($merek)
    {
        Mahasiswa::find($merek)->delete(); 
                 return redirect()->route('anisa_05.index') 
                -> with('success', 'Lemari Es Berhasil Dihapus');
    }
}
