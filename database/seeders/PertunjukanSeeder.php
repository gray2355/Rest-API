<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pertunjukan;

class PertunjukanSeeder extends Seeder
{
    public function run(): void
    {
        Pertunjukan::firstOrCreate(
            ['name' => 'Tari Kecak Uluwatu'],
            [
                'location' => 'Pura Uluwatu, Bali',
                'date' => 'Setiap Hari',
                'time' => '18.00 WITA',
                'price_domestic' => 150000,
                'price_foreign' => 170000,
                'quota' => 100,
                'description' => 'Pertunjukan tari kecak khas Bali dengan latar kawasan Uluwatu.',
                'image' => null,
            ]
        );
    }
}
