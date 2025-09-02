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
            'slug' => 'zona-integritas'
        ]);
        Category::create([
            'name' => 'Subbag Umum',
            'slug' => 'subbag-umum'
        ]);
        Category::create([
            'name' => 'Sosial',
            'slug' => 'sosial'
        ]);
        Category::create([
            'name' => 'Statistik Sektoral',
            'slug' => 'statistik0-sektoral'
        ]);
    }
}
