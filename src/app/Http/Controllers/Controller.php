<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     title="API Dokumentasi Perpustakaan",
 *     version="1.0.0",
 *     description="Dokumentasi API untuk sistem peminjaman buku",
 *     @OA\Contact(
 *         email="admin@wedeh.my.id",
 *         name="Tim Developer"
 *     )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
