<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // kalau kamu pakai relasi ke author, bisa tambahkan:
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
