<?php
namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudangs = Gudang::all();
        return view('data_master.gudang.index', compact('gudangs'));
    }

    public function create()
    {
        return view('data_master.gudang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'nullable'
        ]);

        Gudang::create($request->all());
        return redirect()->route('gudang.index')->with('success', 'Gudang berhasil ditambahkan.');
    }

    public function edit(Gudang $gudang)
    {
        return view('data_master.gudang.edit', compact('gudang'));
    }

    public function update(Request $request, Gudang $gudang)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'nullable'
        ]);

        $gudang->update($request->all());
        return redirect()->route('gudang.index')->with('success', 'Gudang berhasil diperbarui.');
    }

    public function destroy(Gudang $gudang)
    {
        $gudang->delete();
        return redirect()->route('gudang.index')->with('success', 'Gudang berhasil dihapus.');
    }
}
