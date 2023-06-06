<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'film' => 'Samson Betawi',
            'user' => 'image.png',
            'ranting' => '6.4',
            'review' => 'Gitu dh',
            'tanggal' => '2023',
        ],
        [
            'no' => 2,
            'film' => 'Samson Betawi',
            'user' => 'image.png',
            'ranting' => '6.4',
            'review' => 'Gitu dh',
            'tanggal' => '2023',
        ],
        [
            'no' => 3,
            'film' => 'Samson Betawi',
            'user' => 'image.png',
            'ranting' => '6.4',
            'review' => 'Gitu dh',
            'tanggal' => '2023',
        ],
        [
            'no' => 4,
            'film' => 'Samson Betawi',
            'user' => 'image.png',
            'ranting' => '6.4',
            'review' => 'Gitu dh',
            'tanggal' => '2023',
        ],
        [
            'no' => 5,
            'film' => 'Samson Betawi',
            'user' => 'image.png',
            'ranting' => '6.4',
            'review' => 'Gitu dh',
            'tanggal' => '2023',
        ],
    ];

    public function getAllMovies()
    {
        return $this->reviews;
    }
}
