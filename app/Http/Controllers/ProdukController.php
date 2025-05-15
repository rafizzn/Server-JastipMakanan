<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function create()
    {
        // Menampilkan form untuk tambah produk
        return view('produk.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        // Simpan produk baru
        Produk::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'quantity' => $validatedData['quantity'],
        ]);

        // Redirect ke halaman produk atau halaman lain setelah berhasil
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}
?>