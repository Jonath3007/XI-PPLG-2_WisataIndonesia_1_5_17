<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata_Indonesia extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'deskripsi',
        'hargatiket',
        'lokasi',
        'kategori',
        'rating'
    ];
}
