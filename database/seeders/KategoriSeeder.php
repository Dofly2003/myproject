<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Kategori::create([
        'name' => 'TK',
        'slug' => 'tk',
        'color' => 'green'
       ]);
       Kategori::create([
        'name' => 'SD',
        'slug' => 'sd',
        'color' => 'yellow'

       ]);
       Kategori::create([
        'name' => 'SMP',
        'slug' => 'smp',
        'color' => 'orange'

       ]);
       Kategori::create([
        'name' => 'SMA',
        'slug' => 'sma',
        'color' => 'red'
       ]);
    }
}
