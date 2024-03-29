<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan; // Pastikan Anda telah membuat model Jabatan

class JabatanController extends Controller
{
    public function showForm()
    {
        return view('form-jabatan');
    }

    public function submitForm(Request $request)
    {
        // Validasi input jika diperlukan
        $validatedData = $request->validate([
            'nama_jabatan' => 'required|string',
            // Tambahkan validasi lain jika diperlukan
        ]);

        // Simpan data jabatan ke database
        Jabatan::create($validatedData);

        // Redirect dengan pesan sukses jika diperlukan
        return redirect()->route('form.jabatan')->with('success', 'Data jabatan berhasil disimpan!');
    }
}
