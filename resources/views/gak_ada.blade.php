<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Halaman Tidak Ditemukan</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #471c5381;
        }
        
        .content-container {
            text-align: center;
        }

        h1 {
            color: white; 
            font-family: 'Karla', sans-serif;
            margin-bottom: 10px; 
        }
        
        h3 {
            color: #d3d3d3;
            font-family: 'Karla', sans-serif;
            margin: 0;}

    </style>
</head>
<body>
    <div class="content-container">
        <h1>Wah Halaman Yang Anda Cari gak ada</h1><img src="{{ asset('storage/keqing.png') }}" alt="">
        <h3><a href="/">Kembali yuk</a></h3>
    </div>
</body>
</html>
