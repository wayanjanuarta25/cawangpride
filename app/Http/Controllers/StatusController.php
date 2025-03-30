<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller {
    public function index() {
        $status = Status::all();
        return view('data_master.status.index', compact('status'));
    }

    public function create() {
        return view('data_master.status.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255|unique:status',
        ]);

        Status::create($request->all());

        return redirect()->route('status.index')->with('success', 'Status berhasil ditambahkan');
    }

    public function edit(Status $status) {
        return view('data_master.status.edit', compact('status'));
    }

    public function update(Request $request, Status $status) {
        $request->validate([
            'nama' => 'required|string|max:255|unique:status,nama,'.$status->id,
        ]);

        $status->update($request->all());

        return redirect()->route('status.index')->with('success', 'Status berhasil diperbarui');
    }

    public function destroy(Status $status) {
        $status->delete();
        return redirect()->route('status.index')->with('success', 'Status berhasil dihapus');
    }
}
