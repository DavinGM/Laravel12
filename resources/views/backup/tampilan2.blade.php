<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @foreach($umur as $umr)
    <ol>
        <li>
            {{ $umr }}
        </li>
    </ol>
    @endforeach


</body>
</html>