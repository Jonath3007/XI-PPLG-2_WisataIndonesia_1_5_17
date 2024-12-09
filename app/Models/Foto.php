<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'namafile',
        'id_wisata',
        'id_pengguna'
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata_Indonesia::class, 'id_wisata');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
