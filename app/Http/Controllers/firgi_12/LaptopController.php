<?php

namespace App\Http\Controllers\firgi_12;

use App\Models\Category;
use App\Models\firgi_12\Category as Firgi_12Category;
use App\Models\firgi_12\Laptop as Firgi_12Laptop;
use App\Models\Laptop;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('firgi_12.laptop.index', [
            'laptops' => Firgi_12Laptop::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firgi_12.laptop.create', [
            'categories' => Firgi_12Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'merk' => 'required',
            'harga' => 'required',
            'category_id' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file',

        ]);

        $validatedData['slug'] = Str::slug($validatedData['name']);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('laptop');
        }

        Firgi_12Laptop::create($validatedData);

        return redirect('/firgi_12/laptop/index')->with('success', 'Laptop Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptop = Firgi_12Laptop::with('category')->where('id', $id)->first();
        $category = Firgi_12Category::all(); //mendapatkan data dari tabel kelas
        return view('firgi_12.laptop.edit', compact('laptop', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firgi_12Laptop $laptop)
    {
        $rules = [
            'name' => 'required|max:255',
            'merk' => 'required',
            'harga' => 'required',
            'category_id' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file',


        ];

        if($request->slug != $laptop->slug){
            $rules['slug'] = Str::slug($rules['name']);
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('laptop');
        }


        Firgi_12Laptop::where('id', $laptop->id)
        ->update($validatedData);

        return redirect('/firgi_12/laptop')->with('success', 'Laptop has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Firgi_12Laptop::find($id)->delete();

        return redirect('/firgi_12/laptop')->with('success', 'Laptop has been deleted!');
    }
}
