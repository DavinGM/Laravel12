<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // table mahasiswa
        $mahasiswa1 = Mahasiswa::create([
            'nama' => 'Nairha can',
            'nim' => '112233',
        ]);
        // table wali
        Wali::create([
            'nama' => 'Davin',
            'id_mahasiswa' => $mahasiswa1->id,
        ]);
    }
}
