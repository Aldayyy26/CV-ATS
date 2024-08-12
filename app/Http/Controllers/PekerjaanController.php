<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;


class PekerjaanController extends Controller
{
    public function index()
    {
        return view('datadiri.pekerjaan'); // Sesuaikan dengan nama file view Anda
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tanggalmulai' => 'required|date',
            'tanggalselesai' => 'nullable|date',
            'negara' => 'required|string|max:255',
            'jenis' => 'required|in:formal,nonformal',
            'deskripsi' => 'nullable|string',
        ]);

        Pekerjaan::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
