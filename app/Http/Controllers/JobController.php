<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Menampilkan halaman beranda dengan daftar lowongan
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Nantinya akan diisi dengan data dari database
        return view('welcome');
    }

    /**
     * Menampilkan detail lowongan pekerjaan
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        // Untuk sekarang menampilkan view statis
        // Nantinya akan menerima parameter $id dan mengambil data dari database
        return view('detailjob');
    }

 
}