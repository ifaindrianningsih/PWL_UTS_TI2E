<?php

namespace App\Http\Controllers\ridho_26;

use App\Http\Controllers\Controller;
use App\Models\ridho_26\Minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function index()
    {
        $minuman = Minuman::all(); // Mengambil semua isi tabel
        $posts = Minuman::orderBy('id', 'desc')->paginate(6);
        return view('ridho_26.index', compact('minuman'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ridho_26.create');
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
            'id' => 'required',
            'Merk' => 'required',
            'Rasa' => 'required',
            'Expired' => 'required',
            'Harga' => 'required',
            'Berat' => 'required',
        ]);

        Minuman::create($request->all());
        
        return redirect()->route('ridho_26.index')
            ->with('success', 'Minuman Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Minuman = Minuman::find($id);
        return view('ridho_26.detail', compact('Minuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Minuman = Minuman::find($id);
        return view('ridho_26.edit', compact('Mahasiswa'));
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
            'id' => 'required',
            'Merk' => 'required',
            'Rasa' => 'required',
            'Expired' => 'required',
            'Harga' => 'required',
            'Berat' => 'required',
        ]);
        Minuman::find($id)->update($request->all());
        return redirect()->route('ridho_26.index')
            ->with('success', 'Minuman Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Minuman::find($id)->delete();
        return redirect()->route('ridho_26.index')
            ->with('success', 'Minuman Berhasil Dihapus');
    }
}