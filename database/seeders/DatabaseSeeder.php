<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Siswa;
use App\Models\Ujian;
use App\Models\Peserta;
use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Siswa::factory(10)->create();

        $mt = ['MP A', 'MP B', 'MP C', 'MP D', 'MP E', 'MP F'];
        foreach($mt as $c){
            MataPelajaran::create([
                'matpel' => $c,
            ]);
        }

        Ujian::factory(10)->create();

        Peserta::factory(10)->create();
    }
}
