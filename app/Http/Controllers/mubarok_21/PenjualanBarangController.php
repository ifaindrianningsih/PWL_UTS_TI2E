<?php

namespace App\Http\Controllers\mubarok_21;

use App\Models\mubarok_21\BarangElektronik;
use App\Http\Controllers\Controller;
use App\Models\PenjualanBarang as PenjualanBarang;
use Illuminate\Http\Request;


class BarangElektronikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = PenjualanBarang::all();
        return view('mubarok-21.index', [
            'barangs' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mubarok-21.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarangElektronikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'tanggal_penjualan' => 'required',
            'nama_pelanggan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'supplier' => 'required',
            'keterangan' => 'required',
        ]);
        PenjualanBarang::create($validateData);
        return redirect('/PenjualanBarang')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mubarok_21\PenjualanBarang  $penjualanBarang
     * @return \Illuminate\Http\Response
     */
    public function show(PenjualanBarang $penjualanBarang)
    {
       
        $Barang = $penjualanBarang;
        return view('lazuardi_17.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   \App\Models\mubarok_21\PenjualanBarang  $penjualanBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(PenjualanBarang $penjualanBarang)
    {
        $barang = $penjualanBarang;
        return view('mubarok_21.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   \App\Models\mubarok_21\PenjualanBarang  $penjualanBarang $
     * @return \Illuminate\Http\Response
     */
    public function update(PenjualanBarang $request, PenjualanBarang $penjualanBarang)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required',
            'tanggal_penjualan' => 'required',
            'nama_pelanggan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'supplier' => 'required',
            'keterangan' => 'required',
        ]);
        $penjualanBarang->where('id', $penjualanBarang->id)->update($validateData);
        return redirect('/BarangElektronik')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mubarok_21\BarangElektronik  $penjualanBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenjualanBarang $penjualanBarang)
    {
        ddd($penjualanBarang->id);
        PenjualanBarang::where('id', $penjualanBarang->id)->delete();
    }
}