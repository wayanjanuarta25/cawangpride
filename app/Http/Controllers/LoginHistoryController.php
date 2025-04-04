<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginHistory;

class LoginHistoryController extends Controller
{
    public function index()
    {
        $histories = LoginHistory::with('user')->latest()->paginate(10); // Ambil data log
        
        return view('login_history.index', compact('histories'));
    }

    public function destroy($id)
    {
        $history = LoginHistory::findOrFail($id);
        $history->delete();

        return redirect()->route('login.history')->with('success', 'Riwayat login berhasil dihapus.');
    }

    public function clear()
    {
        LoginHistory::truncate();
    
        return redirect()->route('login.history')->with('success', 'Semua riwayat login berhasil dihapus.');
    }

}
