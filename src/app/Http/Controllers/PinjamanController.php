<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pinjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PinjamanController extends Controller
{
    public function toggle($buku_id)
    {
        $buku = Buku::findOrFail($buku_id);

        // ✅ Cek apakah user sudah meminjam dan belum mengembalikan
        $pinjaman = Pinjaman::where('user_id', Auth::id())
            ->where('buku_id', $buku_id)
            ->whereNull('tanggal_kembali')
            ->first();

        if ($pinjaman) {
            // ✅ Kembalikan buku
            $pinjaman->update(['tanggal_kembali' => now()]);
            return back()->with('success', 'Buku berhasil dikembalikan.');
        } else {
            // ✅ Pinjam buku (tanpa cek stok)
            Pinjaman::create([
                'user_id' => Auth::id(),
                'buku_id' => $buku_id,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => null,
            ]);

            return back()->with('success', 'Buku berhasil dipinjam!');
        }
    }

    public function myPinjaman()
    {
        $pinjamen = Pinjaman::with('buku')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('pinjaman.index', compact('pinjamen'));
    }
}
