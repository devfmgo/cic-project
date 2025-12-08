<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'email'        => 'required|email',
            'subjek'       => 'required',
            'message'      => 'required',
        ], [
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Format email tidak valid',
            'subjek.required'       => 'Subjek wajib diisi',
            'message.required'      => 'Pesan wajib diisi',
        ]);

        Feedback::create($validatedData);

        return back()->with(['success' => 'Feedback Berhasil Terkirim!']);
    }
}
