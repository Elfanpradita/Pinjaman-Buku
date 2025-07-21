<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pinjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\PinjamBukuMail;
use Illuminate\Support\Facades\Mail;

class PinjamanController extends Controller
{
     /**
     * @OA\Post(
     *     path="/api/pinjaman/toggle/{buku_id}",
     *     summary="Pinjam buku dan kirim email notifikasi",
     *     tags={"Pinjaman"},
     *     @OA\Parameter(
     *         name="buku_id",
     *         in="path",
     *         required=true,
     *         description="ID buku yang ingin dipinjam",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Buku berhasil dipinjam dan email notifikasi dikirim",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Buku berhasil dipinjam! Email notifikasi dikirim.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Buku tidak ditemukan"
     *     ),
     *     security={{"sanctum": {}}},
     *     description="Jika buku belum dipinjam, sistem akan mencatat peminjaman dan mengirim email notifikasi ke user. Jika sudah dipinjam, dokumentasi ini tidak mencakup aksi pengembalian."
     * )
     */
    public function toggle($buku_id)
    {
        $buku = Buku::findOrFail($buku_id);

        $pinjaman = Pinjaman::where('user_id', Auth::id())
            ->where('buku_id', $buku_id)
            ->whereNull('tanggal_kembali')
            ->first();

        if ($pinjaman) {
            $pinjaman->update(['tanggal_kembali' => now()]);
            return back()->with('success', 'Buku berhasil dikembalikan.');
        } else {
            Pinjaman::create([
                'user_id' => Auth::id(),
                'buku_id' => $buku_id,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => null,
            ]);

            Mail::to(Auth::user()->email)->send(new PinjamBukuMail($buku));

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
