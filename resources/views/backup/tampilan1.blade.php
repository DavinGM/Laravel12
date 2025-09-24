<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello World</p>

    @foreach($siswa as $data)
    <p>{{ $data }}</p>
    @endforeach

</body>
</html>