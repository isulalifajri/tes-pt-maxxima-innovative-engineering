<?php

namespace Database\Factories;

use App\Models\Siswa;
use App\Models\Ujian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ujian_id' => Ujian::pluck('id')->random(),
            'nis' => Siswa::pluck('nis')->random(),
            'nilai' => rand(50, 100), // Menghasilkan nilai acak antara 50 dan 100
            'status' => (rand(50, 100) >= 75) ? 'lulus' : 'tidak lulus' // Menentukan status berdasarkan nilai
        ];
    }
}
