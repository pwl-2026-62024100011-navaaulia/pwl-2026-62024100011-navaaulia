<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = [
            [
                'nama' => 'Dr. Nathan Wijaya',
                'spesialisasi' => 'Dokter Umum',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Dr. Kiara Anindya',
                'spesialisasi' => 'Dokter Anak',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Dr. Rayhan Mahendra',
                'spesialisasi' => 'Dokter Gigi',
                'status' => 'nonaktif',
            ],
            [
                'nama' => 'Dr. Alana Prameswari',
                'spesialisasi' => 'Dokter Kulit',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Dr. Ezra Ramadhan',
                'spesialisasi' => 'Dokter Penyakit Dalam',
                'status' => 'nonaktif',
            ],
        ];

        return view('dokter.index', compact('doctors'));
    }
}