<?php

namespace App\Http\Controllers;

use App\Models\SubJenis;
use Illuminate\Http\Request;
use App\Models\JenisMateriil;

class SubJenisController extends Controller
{
    public function index() {
        $subJenis = SubJenis::all();
        return view('data_master.subjenis.index', compact('subJenis'));
    }

    public function create() 
    {
        $jenisMateriil = JenisMateriil::all();
        return view('data_master.subjenis.create', compact('jenisMateriil'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'jenis_materiil_id' => 'required|exists:jenis_materiil,id',
            'nama' => 'required|string|max:255',
        ]);
    
        SubJenis::create([
            'jenis_materiil_id' => $request->jenis_materiil_id,
            'nama' => $request->nama,
        ]);
    
        return redirect()->route('subjenis.index')->with('success', 'Sub Jenis berhasil ditambahkan');
    }

    public function edit($id) {
        $subJenis = SubJenis::findOrFail($id);
        return view('data_master.subjenis.edit', compact('subJenis'));
    }
    
    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);
    
        $subJenis = SubJenis::findOrFail($id);
        $subJenis->update([
            'nama' => $request->nama,
        ]);
    
        return redirect()->route('subjenis.index')->with('success', 'Sub Jenis berhasil diperbarui');
    }
    
    public function destroy($id) {
        $subJenis = SubJenis::findOrFail($id);
        $subJenis->delete();
    
        return redirect()->route('subjenis.index')->with('success', 'Sub Jenis berhasil dihapus');
    }
}