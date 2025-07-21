<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['title', 'description', 'penjaga_id'];

    public function penjaga()
    {
        return $this->belongsTo(Penjaga::class);
    }

    public function pinjamans()
    {
        return $this->hasMany(Pinjaman::class);
    }
}
