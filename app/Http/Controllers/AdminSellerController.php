<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSellersController extends Controller
{
    public function index()
    {
        return view('admin.sellers');
    }
}