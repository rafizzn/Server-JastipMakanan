<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>
    
    <!-- Menampilkan Pesan Error jika ada validasi gagal -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- Form untuk menambahkan produk -->
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama Produk:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="price">Harga:</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" required>
        </div>

        <div>
            <label for="quantity">Jumlah Stok:</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
        </div>

        <button type="submit">Tambah Produk</button>
    </form>

</body>
</html>
