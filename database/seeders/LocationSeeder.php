<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $enums = ['ruang_rapat', 'ruang_kantor_A', 'ruang_kantor_B', 'gudang'];

        foreach ($enums as $enum) {
            Location::create(['location' => $enum]);
        }
    }
}
