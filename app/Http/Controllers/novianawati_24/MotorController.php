<?php

namespace App\Http\Controllers\novianawati_24;

use App\Http\Controller;
use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motors = Motor::all();
        $posts = Motor::orderBy('Id_motor', 'asc')->paginate(3);
        return view('motors.index', compact('motors'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(motors.create);
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
        'Id_motor' => 'required',
        'Kategori' => 'required',
        'Nama' => 'required',
        'Detail' => 'required',
        'Harga' => 'required',
    ]);
        Motor::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('motors.index')
        ->with('success', 'Data Motor Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_motor)
    {
        $search = Motor::where('Id_motor', 'like', "%".$request->search."%")->paginate(3);
        return view('motor.index',['Motor'=>$search]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_motor)
    {
        $motor = Motor::find($Id_motor);
        return view('motor.edit', compact('Motor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_motor)
    {
        $request->validate([
            'Id_motor' => 'required',
            'Kategori' => 'required',
            'Nama' => 'required',
            'Detail' => 'required',
            'Harga' => 'required',
        ]);           

        Motor::find($Id_motor)->update($request->all());
        return redirect()->route('motor.index')
        ->with('success', 'Data Motor Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_motor)
    {
        Motor::find($Id_motor)->delete();
        return redirect()->route('motor.index')
        -> with('success', 'Data Motor Berhasil Dihapus');

    }
}
