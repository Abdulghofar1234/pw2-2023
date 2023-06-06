<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'genre' => 'Samson Betawi',
            'deskripsi' => 'image.png',
        ],
        [
            'no' => 2,
            'genre' => 'Batman',
            'deskripsi' => 'image.png',
        ],
        [
            'no' => 3,
            'genre' => 'Tsubasa',
            'deskripsi' => 'image.png',
        ],
        [
            'no' => 4,
            'genre' => 'Boruta',
            'deskripsi' => 'image.png',
        ],
        [
            'no' => 5,
            'genre' => 'Cekshow',
            'deskripsi' => 'image.png',
        ],
    ];

    public function getAllMovies()
    {
        return $this->genres;
    }
}
