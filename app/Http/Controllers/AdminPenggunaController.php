<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPenggunaController extends Controller
{
    public function index()
    {
        return view('admin.pengguna');
    }
}
