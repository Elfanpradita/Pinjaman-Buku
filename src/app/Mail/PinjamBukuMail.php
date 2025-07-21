<?php

namespace App\Mail;

use App\Models\Buku;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PinjamBukuMail extends Mailable
{
    use Queueable, SerializesModels;

    public $buku;
    public $tanggal;

    public function __construct(Buku $buku)
    {
        $this->buku = $buku;
        $this->tanggal = now()->format('d M Y H:i');
    }

    public function build()
    {
        return $this->subject('Konfirmasi Peminjaman Buku')
                    ->view('emails.pinjam-buku');
    }
}
