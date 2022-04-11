<?php

namespace App\Http\Controllers\gilang_13;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gilang_13\MesinCuci;

class MesinCuciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
        $mc = MesinCuci::all();
        $posts = MesinCuci::orderBy('kodebarang','desc')->paginate(5);
        return view('gilang_13.index',compact('mc'))->with('i',(request()->input('page',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gilang_13.index');
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
        //melakukan validasi data
        $request->validate([ 'kodebarang' => 'required', 'nama' => 'required', 'spesifikasi' => 'required',
        'merk' => 'required', 'harga' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        MesinCuci::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('gilang_13.index')
        ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kodebarang)
    {
        //
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $mc = MesinCuci::find($kodebarang);
        return view('gilang_13.detail', compact('mc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kodebarang)
    {
        //
        $mc = MesinCuci::find($kodebarang);
        return view('gilang_13.edit', compact('mc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kodebarang)
    {
        //
        //melakukan validasi data
        $request->validate([ 'kodebarang' => 'required', 'nama' => 'required', 'spesifikasi' => 'required',
        'merk' => 'required', 'harga' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kodebarang)
    {
        //
        MesinCuci::find($kodebarang)->delete();
        return redirect()->route('gilang_13.index')
        -> with('success', 'Data Berhasil Dihapus');
    }
}
