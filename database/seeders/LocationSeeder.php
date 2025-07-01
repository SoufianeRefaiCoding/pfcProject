<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::truncate();

        Location::insert([
            [
                'location_name' => 'Sale',
            ],
            [
                'location_name' => 'rabat',
            ],
            [
                'location_name' => 'Fes',
            ],
            [
                'location_name' => 'Tokyo',
            ],
            [
                'location_name' => 'Sydney',
            ],
            [
                'location_name' => 'Melbourne',
            ],
            [
                'location_name' => 'Beijing',
            ],

            [
                'location_name' => 'Singapore',
            ],
            [
                'location_name' => 'Hong Kong',
            ],
        ]);
    }
}
