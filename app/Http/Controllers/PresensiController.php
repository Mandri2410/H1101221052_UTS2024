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
        // Validasi input jika diperlukan
        $validatedData = $request->validate([
            'jabatan' => 'required|string',
            'tanggal' => 'required|date',
            // Tambahkan validasi lain jika diperlukan
        ]);

        // Proses penyimpanan data presensi ke database atau lainnya
        // Misalnya:
        // Presensi::create($validatedData);

        // Redirect dengan pesan sukses jika diperlukan
        return redirect()->route('form.presensi')->with('success', 'Data presensi berhasil disimpan!');
    }
}
