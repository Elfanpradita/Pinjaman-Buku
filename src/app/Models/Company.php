<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function penjagas()
    {
        return $this->hasMany(Penjaga::class);
    }
}
