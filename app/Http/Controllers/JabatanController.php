<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan; 

class JabatanController extends Controller
{
    public function showForm()
    {
        return view('form-jabatan');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'nama_jabatan' => 'required|string',
        ]);

        Jabatan::create($validatedData);

        return redirect()->route('form.jabatan')->with('success', 'Data jabatan berhasil disimpan!');
    }
}
