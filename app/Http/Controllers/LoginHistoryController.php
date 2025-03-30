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
}
