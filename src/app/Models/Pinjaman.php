<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pinjaman extends Model
{
    use HasFactory;

    protected $fillable = ['buku_id', 'tanggal_pinjam', 'tanggal_kembali', 'user_id'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function penjaga()
    {
        return $this->belongsTo(Penjaga::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
