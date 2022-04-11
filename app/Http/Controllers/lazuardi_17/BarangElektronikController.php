<?php

namespace App\Http\Controllers\lazuardi_17;

use App\Models\lazuardi_17\BarangElektronik;
use App\Http\Requests\StoreBarangElektronikRequest;
use App\Http\Requests\UpdateBarangElektronikRequest;
use App\Models\BarangElektronik as ModelsBarangElektronik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangElektronikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = BarangElektronik::all();
        return view('lazuardi_17.barangElektronik', [
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
        return view('lazuardi_17.create');
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
            'nama_barang' => 'required|max:255',
            'merk' => 'required|max:255',
            'warna' => 'required|max:255',
            'ukuran' => 'required|max:255',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        BarangElektronik::create($validateData);
        return redirect('/BarangElektronik')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lazuardi_17\BarangElektronik  $barangElektronik
     * @return \Illuminate\Http\Response
     */
    public function show(BarangElektronik $barangElektronik)
    {
        ddd($barangElektronik->id);
        $Barang = $barangElektronik;
        return view('lazuardi_17.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lazuardi_17\BarangElektronik  $barangElektronik
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangElektronik $barangElektronik)
    {
        $barang = $barangElektronik;
        return view('lazuardi_17.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangElektronikRequest  $request
     * @param  \App\Models\lazuardi_17\BarangElektronik  $barangElektronik
     * @return \Illuminate\Http\Response
     */
    public function update(BarangElektronik $request, BarangElektronik $barangElektronik)
    {
        $validateData = $request->validate([
            'nama_barang' => 'required|max:255',
            'merk' => 'required|max:255',
            'warna' => 'required|max:255',
            'ukuran' => 'required|max:255',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        $barangElektronik->where('id', $barangElektronik->id)->update($validateData);
        return redirect('/BarangElektronik')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lazuardi_17\BarangElektronik  $barangElektronik
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangElektronik $barangElektronik)
    {
        ddd($barangElektronik->id);
        BarangElektronik::where('id', $barangElektronik->id)->delete();
    }
}
