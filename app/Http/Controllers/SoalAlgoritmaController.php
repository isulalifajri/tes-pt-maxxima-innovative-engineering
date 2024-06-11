<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SoalAlgoritmaController extends Controller
{
    public function index(){
        $title = 'Soal Algoritma';
        return view('algoritma.satu', compact(
            'title'
        ));
    }

    private function reverseString($str)
    {
        if (strlen($str) == 0) { //fungsi php untuk  mengembalikan panjang string
            return '';
        }
        return $this->reverseString(substr($str, 1)) . $str[0];
    }

    public function hasilsatuu(Request $request){
        $inputString = $request->input('satu');
        $reversedString = $this->reverseString($inputString);


        dd(['Kalimat Input' => $inputString, 'Kalimat Hasil Reserve' =>$reversedString]);
    }

    public function hasildua(Request $request){
        $inputNumber = (int)$request->input('dua');
        $primes = [];
    
        // Fungsi untuk memeriksa bilangan prima
        function isPrime($num) {
            if ($num <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
    
        // Temukan bilangan prima hingga $inputNumber
        for ($i = 1; $i < $inputNumber; $i++) {
            if (isPrime($i)) {
                $primes[] = $i;
            }
        }
    
        // Hitung total penjumlahan bilangan prima
        $total = array_sum($primes);
    
        dd(['Angka yang di inputkan' => $inputNumber ,'Bilangan Prima' => $primes, 'Total' => $total]);
    }

    public function hasiltiga(){
        $abc = [1, 2, 2, 3, 4, 6, 7, 1, 8, 9, 5, 5];

        // Menghitung frekuensi kemunculan setiap angka
        $counts = array_count_values($abc);

        // Memfilter angka yang muncul lebih dari sekali
        $duplicates = array_filter($counts, function($count) {
            return $count > 1;
        });

        // Mendapatkan angka yang memiliki frekuensi kemunculan lebih dari satu
        $duplicateNumbers = array_keys($duplicates);

        dd(['List Angka' => $abc, 'angka yg sama' => $duplicateNumbers]);
    }

    public function hasilempat(Request $request){
        $birthDate = new \DateTime($request->input('empat'));
        $currentDate = new \DateTime();

        // Menghitung umur dalam tahun, bulan, hari
        $ageInterval = $currentDate->diff($birthDate);

        $ageYears = $ageInterval->y;
        $ageMonths = $ageInterval->m;
        $ageDays = $ageInterval->d;

        $ageString = "$ageYears tahun $ageMonths bulan $ageDays hari";

        // Menghitung jumlah tahun kabisat yang terlewati
        $leapYears = 0;
        for ($year = $birthDate->format('Y'); $year <= $currentDate->format('Y'); $year++) {
            if (checkdate(2, 29, $year)) {
                $leapYears++;
            }
        }

        dd(['tanggal yg di inputkan' => $birthDate,'umur' => $ageString, 'tahun terlewati' => $leapYears]);
    }
}
