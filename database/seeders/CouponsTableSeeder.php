<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str; 

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coupons')->insert([
            [
                'code' => 'SAVE10',
                'description' => 'Get 10% off your next purchase!',
                'discount' => 10.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => '20OFF',
                'description' => '20% discount on all items!',
                'discount' => 20.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
