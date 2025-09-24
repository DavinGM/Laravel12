<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ini data mahasiswa</h2>


    <table>
        <tr>
            <th>Nama</th>
            <th>jenis_kelamin</th>
            <th>tanggal lahir</th>
            <th>kelas</th>
        </tr>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $s->nama_lengkap }}</td>
            <td>{{ $s->jenis_kelamin }}</td>
            <td>{{ $s->tanggal_lahir }}</td>
            <td>{{ $s->kelas }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>