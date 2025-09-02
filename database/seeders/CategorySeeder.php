<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Zona integritas',
            'slug' => 'zona-integritas',
            'color' => 'zi',
        ]);
        Category::create([
            'name' => 'Subbag Umum',
            'slug' => 'subbag-umum',
            'color' => 'um',
        ]);
        Category::create([
            'name' => 'Sosial',
            'slug' => 'sosial',
            'color' => 'so',
        ]);
        Category::create([
            'name' => 'Statistik Sektoral',
            'slug' => 'statistik-sektoral',
            'color' => 'ss',
        ]);
    }
}
