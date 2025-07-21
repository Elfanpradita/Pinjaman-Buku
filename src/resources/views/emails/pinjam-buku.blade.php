<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Peminjaman Buku</title>
</head>
<body>
    <h2>Terima kasih telah meminjam buku!</h2>
    <p>Anda baru saja meminjam buku:</p>
    <ul>
        <li><strong>Judul:</strong> {{ $buku->title }}</li>
        <li><strong>Deskripsi:</strong> {{ $buku->description }}</li>
        <li><strong>Tanggal Pinjam:</strong> {{ $tanggal }}</li>
    </ul>
    <p>Jangan lupa untuk mengembalikan buku tepat waktu ya 😊</p>
</body>
</html>
