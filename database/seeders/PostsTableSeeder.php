<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        DB::table('posts')->insert([
            [
                'title' => 'Tips cepat pintar',
                'content' => 'This is the content of the first post.',
                'cover' => 'cover1.png',
            ],
            [
                'title' => 'Visi dan misi perusahaan',
                'content' => 'This is the content of the second post.',
                'cover' => 'cover2.jpg',
            ],
        ]);
    }
}
