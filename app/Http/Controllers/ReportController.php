<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $judul = 'Data Laporan Fasilitas Kota';

        $laporan = [
            [
                'id' => 1,
                'fasilitas' => 'Jalan Rusak',
                'status' => 'Baru'
            ],
            [
                'id' => 2,
                'fasilitas' => 'Lampu Jalan',
                'status' => 'Diproses'
            ],
            [
                'id' => 3,
                'fasilitas' => 'Drainase',
                'status' => 'Selesai'
            ],
        ];

        return view('reports.index', compact('judul', 'laporan'));
    }

    public function show($id)
    {
        return 'ID Laporan: ' . $id;
    }
}