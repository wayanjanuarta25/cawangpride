<?php

namespace App\Http\Controllers;

use App\Models\JenisMateriil;
use Illuminate\Http\Request;

class JenisMateriilController extends Controller {
    public function index() {
        $jenisMateriil = JenisMateriil::all();
        return view('data_master.jenismateriil.index', compact('jenisMateriil'));
    }

    public function create() {
        return view('data_master.jenismateriil.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255|unique:jenis_materiil',
        ]);

        JenisMateriil::create($request->all());

        return redirect()->route('jenismateriil.index')->with('success', 'Jenis Materiil berhasil ditambahkan');
    }

    public function edit(JenisMateriil $jenismateriil) {
        return view('data_master.jenismateriil.edit', compact('jenismateriil'));
    }

    public function update(Request $request, JenisMateriil $jenismateriil) {
        $request->validate([
            'nama' => 'required|string|max:255|unique:jenis_materiil,nama,'.$jenismateriil->id,
        ]);

        $jenismateriil->update($request->all());

        return redirect()->route('jenismateriil.index')->with('success', 'Jenis Materiil berhasil diperbarui');
    }

    public function destroy(JenisMateriil $jenismateriil) {
        $jenismateriil->delete();
        return redirect()->route('jenismateriil.index')->with('success', 'Jenis Materiil berhasil dihapus');
    }
}
