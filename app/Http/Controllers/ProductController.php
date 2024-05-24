<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'total' => 'required|integer',
            'kondisi' => 'required|in:baru,bekas',
            'berat' => 'required|numeric',
            'gambar' => 'required|image|jpeg,png,jpg,gif|max:2048',
        ]);
        public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'total' => 'required|integer',
            'kondisi' => 'required|in:baru,bekas',
            'berat' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    }

    Product::create([
        'nama' => $request->nama,
        'harga' => $request->harga,
        'total' => $request->total,
        'kondisi' => $request->kondisi,
        'berat' => $request->berat,
        'gambar' => $imageName,
    ]);

    return redirect()->route('products.index')->with('success','Produk berhasil ditambahkan.');
}

}
