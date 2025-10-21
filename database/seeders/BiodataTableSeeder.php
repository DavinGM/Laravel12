<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [ 
                'nama_lengkap' => 'Nairha',
                'jenis_kelamin' => 'Perempuan.',
                'tanggal_lahir' => '2009-01-01',
                'tempat_lahir' => 'Russia',
                'agama' => 'Islam',
                'alamat' => 'Jl. Moscow No. 123, Russia',
                'telepon' => '081838446',
                'email' => 'naira@gmail.com',
                'foto' => 'nairha.jpg'
            ],
            // [
            //     'nama_lengkap' => 'Kina SaQina',
            //     'jenis_kelamin' => 'perempuan.',
            //     'tanggal_lahir' => '2009-06-12',
            //     'tempat_lahir' => 'Moskow',
            //     'agama' => 'Islam',
            //     'alamat' => 'Jl. Kyvotos No. 456, Moskow',
            //     'telepon' => '082345678901',
            //     'email' => 'kina@gmail.com'
            // ],
            // [
            //     'nama_lengkap' => 'Rehan Ramdhan',
            //     'jenis_kelamin' => 'laki-laki.',
            //     'tanggal_lahir' => '2008-01-01',
            //     'tempat_lahir' => 'bandung',
            //     'agama' => 'Islam',
            //     'alamat' => 'Jl. Rancamanyar , Bandung',
            //     'telepon' => '083456789012',
            //     'email' => 'rehanR@gmail.com' 
            // ],
            // [
            //     'nama_lengkap' => 'Nairha can',
            //     'jenis_kelamin' => 'perempuan.',
            //     'tanggal_lahir' => '2009-06-01',
            //     'tempat_lahir' => 'Osaka',
            //     'agama' => 'Islam',
            //     'alamat' => ', Osaka, Jepang',
            //     'telepon' => ' 084567890123',
            //     'email' => 'Nairhacan@gmail.com'
            // ],
            // [
            //     'nama_lengkap' => 'Fakhri ibnu',
            //     'jenis_kelamin' => 'laki-laki.',
            //     'tanggal_lahir' => '2001-01-01',
            //     'tempat_lahir' => 'Bandung',
            //     'agama' => 'Islam',
            //     'alamat' => 'Jl. Sukajadi, Bandung',
            //     'telepon' => '085678901234',
            //     'email' => 'Fakhir@gmail.com'
            // ],
            // [
            //     'nama_lengkap' => 'Rayhan azka',
            //     'jenis_kelamin' => 'laki-laki.',
            //     'tanggal_lahir' => '2009-08-22',
            //     'tempat_lahir' => 'Bandung',
            //     'agama' => 'Islam',
            //     'alamat' => 'Jl. jatimekar, Bandung',
            //     'telepon' => '086789012345',
            //     'email' => 'rehanuasnab@gmail.com'
            // ],
            // [
            //     'nama_lengkap' => 'Ilaman',
            //     'jenis_kelamin' => 'laki laki.',
            //     'tanggal_lahir' => '2009-05-17',
            //     'tempat_lahir' => 'Bandung',
            //     'agama' => 'Islam',
            //     'alamat' => 'Jl. Sukamenak, Bandung',
            //     'telepon' => '087890123456',
            //     'email' => 'ilaman@gmail.com'
            // ],
            // [
            //     'nama_lengkap' => 'Naufal',
            //     'jenis_kelamin' => 'laki laki.',
            //     'tanggal_lahir' => '2009-03-10',
            //     'tempat_lahir' => 'Bandung',
            //     'agama' => 'Islam',
            //     'alamat' => 'Jl. Sukajadi, Bandung',
            //     'telepon' => '088901234567',
            //     'email' => 'Naufal@gmail.com' 
            // ],
            // [
            //     'nama_lengkap' => 'Rizki',
            //     'jenis_kelamin' => 'laki laki.',
            //     'tanggal_lahir' => '2009-07-25',
            //     'tempat_lahir' => 'Bandung',
            //     'agama' => 'Islam',
            //     'alamat' => 'Jl. Cibaduyut, Bandung',
            //     'telepon' => '089012345678',
            //     'email' => 'Rizki@gamil.com'
            // ],
            // [
            //     'nama_lengkap' => 'Jihad',
            //     'jenis_kelamin' => 'laki laki.',
            //     'tanggal_lahir' => '2009-11-30',
            //     'tempat_lahir' => 'Bandung',
            //     'agama' => 'Islam',
            //     'alamat' => 'Jl. Cibiru, Bandung',
            //     'telepon' => '080123456789',
            //     'email' => 'jihda@gamil.com'
            // ],
            
        ]);
    }
}
