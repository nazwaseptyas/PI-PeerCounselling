<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Konsultasi extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'alamat', 'tanggal', 'nohp', 'keluhan'];

    public static function createWithSession($data)
    {
        return self::create($data);
    }
   public function user(): BelongsTo
    {
    return $this->belongsTo(User::class, 'id', 'id');
    }

}