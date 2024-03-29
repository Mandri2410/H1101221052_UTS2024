<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function showForm()
    {
        return view('form-presensi');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'jabatan' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        return redirect()->route('form.presensi')->with('success', 'Data presensi berhasil disimpan!');
    }
}
