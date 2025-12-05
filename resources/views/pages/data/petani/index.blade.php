<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Petani</h2>
<a href="{{ route('petani.create') }}">Tambah Data</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->alamat }}</td>
        <td>{{ $p->no_hp }}</td>
        <td>
            <a href="{{ route('petani.edit', $p->id) }}">Edit</a>
            <form action="{{ route('petani.destroy', $p->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>