<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjaga extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'name', 'user_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
