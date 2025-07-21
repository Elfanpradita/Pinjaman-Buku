@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Daftar Buku</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="row">
        @foreach($bukus as $buku)
            @php
                $pinjamSekarang = auth()->check() 
                    ? \App\Models\Pinjaman::where('user_id', auth()->id())
                        ->where('buku_id', $buku->id)
                        ->whereNull('tanggal_kembali')
                        ->exists()
                    : false;
            @endphp

            <div class="col-md-3">
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <h5>{{ $buku->title }}</h5>
                        <p>{{ $buku->description }}</p>

                        @auth
                            <form action="{{ route('pinjam.toggle', $buku->id) }}" method="POST">
                                @csrf
                                <button class="btn {{ $pinjamSekarang ? 'btn-danger' : 'btn-primary' }} btn-sm w-100">
                                    {{ $pinjamSekarang ? 'Kembalikan' : 'Pinjam' }}
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-secondary btn-sm w-100">
                                Login untuk Pinjam
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
