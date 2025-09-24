<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Basreng',
                'deskpsi' => 'Basreng pedas khas Bandung, kriuk gurih menggoda.',
                'price' => 10000,
                'stock' => 20,
            ],
            [
                'name' => 'Sushi',
                'deskpsi' => 'Makanan Jepang berisi nasi, ikan segar, dan rumput laut.',
                'price' => 45000,
                'stock' => 15,
            ],
            [
                'name' => 'Pizza Margherita',
                'deskpsi' => 'Pizza klasik Italia dengan tomat, keju mozzarella, dan basil.',
                'price' => 60000,
                'stock' => 10,
            ],
            [
                'name' => 'Kimchi',
                'deskpsi' => 'Sayuran fermentasi khas Korea dengan rasa pedas asam.',
                'price' => 25000,
                'stock' => 30,
            ],
            [
                'name' => 'Rendang',
                'deskpsi' => 'Masakan khas Padang dengan daging sapi dan rempah kaya.',
                'price' => 50000,
                'stock' => 12,
            ],
            [
                'name' => 'Tacos',
                'deskpsi' => 'Makanan khas Meksiko berisi daging, sayuran, dan salsa.',
                'price' => 35000,
                'stock' => 18,
            ],
            [
                'name' => 'Spaghetti Carbonara',
                'deskpsi' => 'Pasta Italia dengan saus creamy, telur, dan daging asap.',
                'price' => 55000,
                'stock' => 14,
            ],
            [
                'name' => 'Curry Jepang',
                'deskpsi' => 'Kare Jepang kental dengan kentang, wortel, dan daging sapi.',
                'price' => 40000,
                'stock' => 22,
            ],
            [
                'name' => 'Croissant',
                'deskpsi' => 'Roti lapis khas Perancis, renyah di luar lembut di dalam.',
                'price' => 20000,
                'stock' => 25,
            ],
            [
                'name' => 'Pad Thai',
                'deskpsi' => 'Mi goreng khas Thailand dengan udang, tauge, dan kacang tanah.',
                'price' => 45000,
                'stock' => 16,
            ],
        ]);
    }
}
