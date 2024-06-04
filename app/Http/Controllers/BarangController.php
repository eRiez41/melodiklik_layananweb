<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // Data dummy
        $barangs = [
            ['id' => 1, 'nama' => 'Barang A', 'harga' => 10000],
            ['id' => 2, 'nama' => 'Barang B', 'harga' => 20000],
            ['id' => 3, 'nama' => 'Barang C', 'harga' => 30000],
        ];

        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        // Untuk sekarang, hanya redirect ke index dengan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Data dummy untuk barang yang akan diedit
        $barang = ['id' => $id, 'nama' => 'Barang A', 'harga' => 10000];

        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        // Untuk sekarang, hanya redirect ke index dengan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate.');
    }

    public function destroy($id)
    {
        // Untuk sekarang, hanya redirect ke index dengan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
