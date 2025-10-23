

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th {
            border: 1px solid black;
            background-color: red;

        }
        td {
            border: 1px solid black;
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h2>ini data post</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @foreach($post as $p)
        <tr>
            <td>{{ $p->title }}</td>
            <td>{{ $p->content }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>