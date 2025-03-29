<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index()
    {
        return view('superadmin.dashboard');
    }

    public function manageUsers()
    {
        return view('superadmin.manage-users');
    }

    public function dataMaster()
    {
        return view('superadmin.data-master');
    }
}
