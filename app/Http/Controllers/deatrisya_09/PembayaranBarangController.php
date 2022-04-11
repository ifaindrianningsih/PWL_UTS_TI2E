<?php

namespace App\Http\Controllers\deatrisya_09;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\deatrisya_09\PembayaranBarang;

class PembayaranBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = PembayaranBarang::all();
        $barang = PembayaranBarang::orderBy('id_barang')->paginate(5);
        return view('deatrisya_09.index',compact('barang'))
        ->with('i',(request()->input('page',1)-1)*5);
        // return view('deatrisya_09.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deatrisya_09.create');
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
            'nama_barang' => 'required',
            'jenis_barang'=> 'required',
            'harga_satuan'=> 'required',
            'jumlah_barang'=> 'required',
            'total_harga'=> 'required',
        ]);
        PembayaranBarang::create($request->all());

        return redirect()->route('barang.index')
        ->with('success','Data baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = PembayaranBarang::find($id);
        return view('deatrisya_09.detail',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = PembayaranBarang::find($id);
        return view('deatrisya_09.edit',compact('barang'));
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
            'nama_barang' => 'required',
            'jenis_barang'=> 'required',
            'harga_satuan'=> 'required',
            'jumlah_barang'=> 'required',
            'total_harga'=> 'required',
        ]);

        PembayaranBarang::find($id)->update($request->all());
        return redirect()->route('barang.index')
        ->with('success','Data  berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_barang)
    {
        PembayaranBarang::find($id_barang)->delete();
        return redirect()->route('barang.index')
        ->with('success','Data berhasil dihapus!');
    }
}
