<?php

namespace Database\Seeders;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'Genre about action-packed movies',
        ]);
        Genre::create([
            'nama' => 'Drama',
            'deskripsi' => 'Genre about action-packed movies',
        ]);
        Genre::create([
            'nama' => 'Horror',
            'deskripsi' => 'Genre about action-packed movies',
        ]);
    }
}
