<?php

namespace App\Http\Controllers;

use App\Models\SubSubJenis;
use App\Models\SubJenis;
use Illuminate\Http\Request;

class SubSubJenisController extends Controller
{
    public function index()
    {
        $subSubJenis = SubSubJenis::with('subJenis.jenisMateriil')->paginate(10);
        return view('data_master.subsubjenis.index', compact('subSubJenis'));
    }
    

    public function create() 
    {
        $subJenis = SubJenis::with('jenisMateriil')->get();
        return view('data_master.subsubjenis.create', compact('subJenis'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'sub_jenis_id' => 'required|exists:sub_jenis,id',
            'nama' => 'required|string|max:255',
        ]);

        SubSubJenis::create([
            'sub_jenis_id' => $request->sub_jenis_id,
            'nama' => $request->nama,
        ]);

        return redirect()->route('subsubjenis.index')->with('success', 'Sub Sub Jenis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $subSubJenis = SubSubJenis::findOrFail($id);
        $subJenis = SubJenis::all(); // Ambil semua sub_jenis agar bisa dipilih saat edit
        return view('data_master.subsubjenis.edit', compact('subSubJenis', 'subJenis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sub_jenis_id' => 'required|exists:sub_jenis,id',
            'nama' => 'required|string|max:255',
        ]);

        $subSubJenis = SubSubJenis::findOrFail($id);
        $subSubJenis->update([
            'sub_jenis_id' => $request->sub_jenis_id,
            'nama' => $request->nama,
        ]);

        return redirect()->route('subsubjenis.index')->with('success', 'Sub Sub Jenis berhasil diperbarui');
    }

    public function destroy($id)
    {
        $subSubJenis = SubSubJenis::findOrFail($id);
        
        // Cek apakah data masih digunakan sebelum menghapus
        if ($subSubJenis->barang()->exists()) {
            return redirect()->route('subsubjenis.index')->with('error', 'Sub Sub Jenis tidak bisa dihapus karena masih digunakan.');
        }

        $subSubJenis->delete();

        return redirect()->route('subsubjenis.index')->with('success', 'Sub Sub Jenis berhasil dihapus');
    }

    public function getBySubJenis(Request $request)
    {
        $subSubJenis = SubSubJenis::where('sub_jenis_id', $request->sub_jenis_id)->get();
        return response()->json($subSubJenis);
    }
}
