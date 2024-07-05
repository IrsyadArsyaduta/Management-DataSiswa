<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login

        // Lakukan sesuatu dengan data nisn, kelas, keterangan
        $nisn = $user->nisn;
        $kelas = $user->kelas;
        $keterangan = $user->keterangan;

        // Tampilkan view dashboard dengan data yang diperlukan
        return view('siswa.dashboard', compact('nisn', 'kelas', 'keterangan'));
    }
}
