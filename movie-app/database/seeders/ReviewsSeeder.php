<?php

namespace Database\Seeders;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'no' => '1',
            'film' => 'The Shawshank redemption',
            'user' => 'image.png',
            'ranting' => 9.8,
            'review' => 'USA',
            'tanggal' => 1994,
        ]);
    }
}
