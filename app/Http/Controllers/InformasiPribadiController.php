<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiPribadi;

class InformasiPribadiController extends Controller
{
    public function index()
    {
        return view('datadiri.informasi_pribadi'); // Sesuaikan dengan nama file view Anda
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'tempatLahir' => 'required|string|max:255',
        'tanggalLahir' => 'required|date',
        'email' => 'required|email|max:255',
        'noHp' => 'required|string|max:20',
        'alamat' => 'required|string|max:255',
        'gender' => 'required|string',
        'deskripsi' => 'required|string',
        'uploadFoto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $data = $request->only([
        'nama', 'tempatLahir', 'tanggalLahir', 'email', 'noHp', 'alamat', 'gender', 'deskripsi'
    ]);

    if ($request->hasFile('uploadFoto')) {
        $file = $request->file('uploadFoto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);
        $data['uploadFoto'] = $filename;
    }

    InformasiPribadi::create($data);

    return redirect()->back()->with('success', 'Data saved successfully!');
}


}
