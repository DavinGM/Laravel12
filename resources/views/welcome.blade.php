<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/2300px-React-icon.svg.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #e3f0ff 0%, #f9f9f9 100%);
            min-height: 100vh;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #222;
            padding: 1rem 2rem;
            color: #fff;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.2s;
        }

        .nav-links li a:hover {
            color: #ffd700;
        }

        .btn {
            background: #ffd700;
            color: #222;
            border: none;
            padding: 0.5rem 1.2rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.2s;
        }

        .btn:hover {
            background: #e6c200;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 30px;
            font-size: 2.2rem;
            letter-spacing: 1px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .card {
            background: #fff;
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 24px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
            font-size: 1.08rem;
            position: relative;
        }

        .card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(0,123,255,0.15);
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: 600;
            transition: color 0.2s;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        /* Navbar style suggestion */
        x-nav {
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar tetap terlihat -->
    <div>
        <x-nav></x-nav>
    </div>

    <div class="container">
        <h2>Laravel 12</h2>

        <!-- Card Grid -->
        <div class="card-container">
            <div class="card">Menampilkan data nama Siswa dengan Route <a href="/halaman1">click here</a> </div>
            <div class="card">Menampilkan data umur siswa dengan Route <a href="/halaman2">click here</a></div>
            <div class="card">Menampilkan data hobi siswa dengan Route <a href="/halaman3">click here</a></div>
            <div class="card">Menampilkan Sapaan Untuk Kina dengan Route <a href="/halaman4">click here</a></div>
            <div class="card">Menejemen Database Sederhana Dengan Controller <a href="{{ url('/articles') }}">Lihat Artikel</a></div>
            <div class="card">Tampilan 6</div>
        </div>
    </div>
</body>
</html>
