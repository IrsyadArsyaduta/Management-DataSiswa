<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalisiswaDashboardController extends Controller
{
    public function index()
    {
        return view('walisiswa.dashboard'); // Menampilkan halaman file dashboard didalam folder walisiswa (views)
    }
}
