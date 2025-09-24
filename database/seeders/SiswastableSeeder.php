<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class SiswastableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Siswas')->insert([
            [
                'nama_lengkap' => 'Davin gahisan',
                'jenis_kelamin' => 'laki-laki.',
                'tanggal_lahir' => '2009-01-01',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Kina SaQina',
                'jenis_kelamin' => 'perempuan.',
                'tanggal_lahir' => '2009-06-12',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Rehan Ramdhan',
                'jenis_kelamin' => 'laki-laki.',
                'tanggal_lahir' => '2008-01-01',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Nairha can',
                'jenis_kelamin' => 'perempuan.',
                'tanggal_lahir' => '2009-06-01',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Fakhri ibnu',
                'jenis_kelamin' => 'laki-laki.',
                'tanggal_lahir' => '2001-01-01',
                'kelas' => 'XI RPL 1',
            ],
            
        ]);
    }
}
