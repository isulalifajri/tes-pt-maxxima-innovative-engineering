<?php

namespace Database\Factories;

use App\Models\MataPelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ujian>
 */
class UjianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mata_pelajaran_id' => MataPelajaran::pluck('id')->random(),
            'nama_ujian' => fake()->name(),
            'tanggal' => fake()->date($format = 'Y-m-d', $max = 'now'), // Format tanggal YYYY-MM-DD
        ];
    }
}
