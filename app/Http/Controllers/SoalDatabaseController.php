<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Siswa;
use App\Models\Ujian;
use App\Models\User;
use Illuminate\Http\Request;

class SoalDatabaseController extends Controller
{
    public function database(){
        $title = 'soal database';
        return view('database.database', compact(
            'title'
        ));
    }

    public function user(){
        $title = 'soal database';
        $user = Siswa::all();
        return view('database.user', compact(
            'title', 'user'
        ));
    }

    public function ujian(){
        $title = 'soal database';
        $user = Ujian::all();
        return view('database.ujian', compact(
            'title', 'user'
        ));
    }

    public function tampil(Request $request){
        $title = 'soal database';
        $tanggal = date('d', strtotime($request->input('tanggal')));
        $user = Ujian::whereRaw("DAY(tanggal) = ?", [$tanggal])->get();

        // $tampil = date('Y-m-d', strtotime($request->input('tanggal')));
        // $user = Ujian::where('tanggal', $tampil)->get();

        return view('database.ujian', compact('title', 'user'));
    }

    public function peserta(){

        $title = 'soal database';
        $user = Peserta::all();
        return view('database.peserta', compact('title', 'user'));
    }
}
