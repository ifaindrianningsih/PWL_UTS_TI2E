<?php

namespace App\Http\Controllers\judha_16;

use App\Http\Controllers\Controller;
use App\Models\judha_16\JamTangan;
use Illuminate\Http\Request;

class JamTanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jamTangan = JamTangan::all();
        // dd($jamTangan);


        return view('judha_16.index', compact('jamTangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('judha_16.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'merk' => 'required',
            'category' => 'required',
            'type' => 'required',
            'stok' => 'required'
        ]);

        JamTangan::create($validateData);

        return redirect()->route('jamtangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jamTangan = JamTangan::where('id', $id)->first();

        return view('judha_16.show', compact('jamTangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jamTangan = JamTangan::where('id', $id)->first();
        return view('judha_16.edit', compact('jamTangan'));
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
        $validateData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'merk' => 'required',
            'category' => 'required',
            'type' => 'required',
            'stok' => 'required'
        ]);

        JamTangan::where('id', $id)->update($validateData);
        return redirect()->route('jamtangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JamTangan::find($id)->delete();

        return redirect()->route('jamtangan.index');
    }
}
