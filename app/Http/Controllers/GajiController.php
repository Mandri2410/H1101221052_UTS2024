<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function showForm()
    {
        return view('form-gaji');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'gaji' => 'required|numeric',
            'pendidikan' => 'required|string',
        ]);
        return redirect()->route('form.gaji')->with('success', 'Form gaji berhasil disubmit!');
    }
}
