<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Artikel</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        .btn-delete { background: red; color: white; padding: 5px 10px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Tambah Artikel</h1>

    {{-- Form tambah artikel --}}
    <form action="{{ url('/articles') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="title" required><br><br>
        <label>Konten:</label><br>
        <textarea name="content" required></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <h2>Daftar Artikel</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>

                        <form action="{{ url('/articles/'.$article->id) }}" method="POST" onsubmit="return confirm('Yakin hapus artikel ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
