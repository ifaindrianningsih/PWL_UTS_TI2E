<?php

namespace App\Http\Controllers\mahbub_19;

use App\Http\Controllers\Controller;
use App\models\mahbub_19\Model19;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller19 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //search
        $search =  $dosen = DB::table('dosen');

        if(request('search')){
            $search->where('nama' , 'Like' , '%' . request('search') . '%')
                   ->orWhere('nip' , 'Like' , '%' . request('search') . '%');
        }
        //fungsi eloquent menampilkan data menggunakan pagination
        $dosen = $search->paginate(3);//Mengambil semia isi tabel
        $posts = Model19::orderBy('nip','desc')->paginate(6);
        return view('mahbub_19.index',compact('dosen'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahbub_19.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nip'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'jabatan'=>'required',
            'alamat'=>'required',
            'ttl'=>'required',
        ]);

        //fungsi eloquent untuk menambah data
        Model19::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('dosen.index')
        ->with('success','Data Dosen berhasil di tambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nip)
    {
        $dosen = Model19::find($nip);
        return view('mahbub_19.detail', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nip)
    {
        $dosen = DB::table('dosen')->where('nip',$nip)->first();
        return view('mahbub_19.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip)
    {

        $request->validate([
            'nip'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'jabatan'=>'required',
            'alamat'=>'required',
            'ttl'=>'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan
        Model19::find($nip)->update($request->all());

        //jika data berhasil diupadate, akan kembali ke halaman utama
        return redirect()->route('dosen.index')
        ->with('success', 'Data Dosen Berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip)
    {
        //fungsi eloquent untuk menghapus data
        $dosen = DB::table('dosen')->where('nip',$nip)->delete();
        return redirect()->route('dosen.index')
            -> with('success', 'Data Dosen Berhasil Dihapus'); 
    }
}
