<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();

        return View('product', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required'
        ]);
        // Simpan gambar 
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/fotobunga', $imageName);
        Product::create([
            'nama' => $request->nama,
            'image' => $imageName,
            'harga' => $request->harga
        ]);
        
        return redirect()->route('product')->with(['succes' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //get sant$product by ID
        $product = Product::findOrFail($id);

        //render view with product
        return view('edit', compact('product'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/fotobunga', $imageName);
        $product = Product::findOrFail($id);
        $product->update([
            'nama' => $request->nama,
            'image' => $imageName,
            'harga' => $request->harga,
        ]);
        return redirect()->route('product')->with(['succes' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) 
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product')->with(['succes' => 'Data Berhasil Disimpan!']);
    }
}
