<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
        .card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
        }
        .body-card {
            margin-top: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .footer-div {
            margin-top: 20px;
            text-align: left;
        }
        .back_home {
            padding: 10px 15px;
            background-color: #007bff3f;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Detail Murid</h1>
        <div class="body-card">
        <table>
            <thead>
                <tr>
                    <td>
                        Nama Lengkap:
                    </td>
                    <td>
                        Jenis Kelamin:
                    </td>
                    <td>
                        Tanggal Lahir:
                    </td>
                    <td>
                        Kelas:
                    </td>
                    <td>
                        Tempat Lahir:
                    </td>
                    <td>
                        Alamat:
                    </td>
                    <td>
                        email:
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ $murid->nama_lengkap }}
                    </td>
                    <td>
                        {{ $murid->jenis_kelamin }}
                    </td>
                    <td>
                        {{ $murid->tanggal_lahir }}
                    </td>
                    <td>
                        {{ $murid->kelas->nama_kelas ?? '-' }}
                    </td>
                    <td>
                        {{ $murid->tempat_lahir }}
                    </td>
                    <td>
                        {{ $murid->alamat }}
                    </td>
                    <td>
                        {{ $murid->email }}
                    </td>
                </tr>
        </table>
        </div>
        <div class="footer-div">
            <a class="back_home" href="{{ route('murid.index') }}">Kembali</a>
        </div>
    </div>
</body>
</html>