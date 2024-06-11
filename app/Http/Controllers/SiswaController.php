<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create(){
        $title = 'tambah';
        return view('database.tambah_user', compact(
            'title'
        ));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nis' => ['required', 'string', 'max:250'],
            'nama' => ['required'],
            'alamat' => ['required', 'string', 'max:250'],
        ]);

       Siswa::create($validatedData);

        return back()
            ->withSuccess('Pendaftaran Berhasil');
    }

    public function destroy(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id); // Mencari siswa berdasarkan ID

        $siswa->delete(); // Menghapus siswa

        return back()->with('success', 'Siswa berhasil dihapus');
    }
}
