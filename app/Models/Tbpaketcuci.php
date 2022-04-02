<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbpaketcuci extends Model
{
    use HasFactory;
    public $table = 'tbpaketcuci';

    public $fillable = [
        'namapaket',
        'deskripsi',
        'harga',
    ];
}
