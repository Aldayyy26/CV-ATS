<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{

    public function index()
    {
        return view('datadiri.pendidikan'); // Sesuaikan dengan nama file view Anda
    }

    public function store(Request $request)
    {
        $request->validate([
            'pendidikan' => 'required|string',
            'namasekolah' => 'required|string',
            'tanggalmasuk' => 'required|date',
            'tanggallulus' => 'required|date',
            'gelar' => 'nullable|string',
            'ipk' => 'nullable|string',
            'nilaiRataRata' => 'nullable|string',
            'alamatlengkap' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        Pendidikan::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
