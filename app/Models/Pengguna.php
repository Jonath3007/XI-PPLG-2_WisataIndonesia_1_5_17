<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'password',
        'email',
        'role',
        'nomorwa',
        'alamat'
    ];

    public function wisata(): BelongsTo
    {
        return $this->belongsTo(Wisata_Indonesia::class);
    }
}
