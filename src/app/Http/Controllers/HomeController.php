<?php

namespace App\Http\Controllers;

use App\Models\Buku;

Route::get('/', function () {
    $bukus = Buku::all();
    return view('welcome', compact('bukus'));
});