@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Riwayat Pinjaman Saya</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pinjamen as $p)
            <tr>
                <td>{{ $p->buku->title }}</td>
                <td>{{ $p->tanggal_pinjam }}</td>
                <td>{{ $p->tanggal_kembali ?? 'Belum dikembalikan' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
