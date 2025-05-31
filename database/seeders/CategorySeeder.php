<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $enums = ['alat_tulis', 'elektronik', 'furniture', 'lainnya'];

        foreach ($enums as $enum) {
            Category::create(['name' => $enum]);
        }
    }
}
