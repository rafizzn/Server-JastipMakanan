<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="{{ route('produk.create') }}">Tambah Produk Baru</a>
    <ul>
        @foreach ($produks as $produk)
            <li><a href="{{ route('produk.show', $produk->id) }}">{{ $produk->name }}</a></li>
        @endforeach
    </ul>
</body>
</html>
