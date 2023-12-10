<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('dashboard', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok_awal' => 'required|integer',
            'harga_barang' => 'required|numeric',
        ]);

        Barang::create($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Barang created successfully');
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok_awal' => 'required|integer',
            'harga_barang' => 'required|numeric',
        ]);

        $barang->update($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Barang updated successfully');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Barang deleted successfully');
    }
}