<?php

namespace App\Http\Controllers\salwa_27;

use App\Models\salwa_27\Smartphone_27;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmartphoneController_27 extends Controller
{
    /**
     * Display a listing of the resource. 
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smartphone = Smartphone_27::paginate(5); // Mengambil semua isi tabel
        $posts = Smartphone_27::orderBy('id', 'desc')->paginate(6);
        return view('salwa_27.index', compact('smartphone'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salwa_27.create');
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
            'merk' => 'required',
            'tipe'=> 'required',
            'warna'=> 'required',
            'kapasitas' => 'required',
            'sistem_operasi'=> 'required',
            'ukuran_layar'=> 'required',
            'berat'=> 'required',
            'resolusi_kamera'=> 'required',
            'harga'=> 'required',
        ]);

        Smartphone_27::create($request->all());
        return redirect()->route('salwa_27.index')
        ->with('success', 'Smartphone Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Smartphone = Smartphone_27::find($id);
        return view('salwa_27.detail', compact('Smartphone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Smartphone = Smartphone_27::find($id);
        return view('salwa_27.edit', compact('Smartphone'));
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
            'merk' => 'required',
            'tipe'=> 'required',
            'warna'=> 'required',
            'kapasitas' => 'required',
            'sistem_operasi'=> 'required',
            'ukuran_layar'=> 'required',
            'berat'=> 'required',
            'resolusi_kamera'=> 'required',
            'harga'=> 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Smartphone_27::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('salwa_27.index')
            ->with('success', 'Smartphone Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Smartphone_27::find($id)->delete();
        return redirect()->route('salwa_27.index')
            ->with('success', 'Smartphone Berhasil Dihapus');
    }
}
