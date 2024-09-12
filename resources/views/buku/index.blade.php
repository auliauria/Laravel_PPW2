<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp. ".number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ $buku->tgl_terbit }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p style="size:20px;">Total Harga : Rp.{{ "".number_format($sum, 2, ',', '.') }}</p>
    <p style="size=20px;">Total buku sebanyak : {{ $total }}</p>
    
</body>
</html>