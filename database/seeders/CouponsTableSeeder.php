<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}
DB::table('coupon')->insert([
    ['code' => 'SAVE10', 'description' => 'Get 10% off your next purchase!', 'discount' => 10],
    ['code' => '20OFF', 'description' => '20% discount on all items!', 'discount' => 20]
]);
