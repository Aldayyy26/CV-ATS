<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('datadiri.skill');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bidang' => 'required|string|max:255',
            'posisikerja' => 'required|string|max:255',
            'keahlian' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'keterampilan' => 'required|string',
        ]);

        Skill::create($request->all());

        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}
