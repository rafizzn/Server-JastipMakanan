<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    <p>Nama: {{ $produk->name }}</p>
    <p>Deskripsi: {{ $produk->description }}</p>
    <p>Harga: Rp {{ number_format($produk->price, 2) }}</p>
    <p>Pembeli: {{ $produk->pembeli->name }}</p>
</body>
</html>
