<?php

namespace App\Http\Controllers\ifa_14;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\ifa_14\Baju;

class BajuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baju = DB::table('baju')->get(); 
        return view('ifa_14.index', compact('baju'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ifa_14.create');
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
            'nama_baju' => 'required',
            'bahan' => 'required',
            'stok' => 'required',
            'motif' => 'required',
            'warna' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);

        Baju::create($request->all());
        return redirect()->route('baju.index')
            ->with('success', 'Baju Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_baju)
    {
        //$baju = Baju::find($id_baju);
        $baju = DB::table('baju')->where('id_baju', $id_baju)->first();;
        return view('ifa_14.detail', compact('baju'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_baju)
    {
        $baju = DB::table('baju')->where('id_baju', $id_baju)->first();
        return view('ifa_14.edit', compact('baju'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_baju)
    {
        $validate = $request->validate([
            'nama_baju' => 'required',
            'bahan' => 'required',
            'stok' => 'required',
            'motif' => 'required',
            'warna' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);

        $baju = DB::table('baju')->where('id_baju', $id_baju)->update($validate);
        return redirect()->route('baju.index')
        ->with('success', 'baju Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_baju)
    {
        Baju::find($id_baju)->delete();
        return redirect()->route('baju.index')
        -> with('success', 'Baju Berhasil Dihapus');
    }
}
