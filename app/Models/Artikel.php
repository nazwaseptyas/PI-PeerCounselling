<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;
    // Nama tabel yang akan digunakan oleh model Artikel
    protected $table = 'artikel';

    // Kolom-kolom yang bisa diisi oleh user ketika membuat data artikel
    protected $fillable = ['judul', 'penulis', 'tanggal', 'isi', 'gambar'];

    // Metode untuk mendapatkan data penulis artikel
    public function penulis()
    {
        // Asosiasi dengan model User (asumsi Anda memiliki model User)
        return $this->belongsTo(User::class, 'penulis');
    }
}