<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
    <h2>hello dunia </h2>

    <table>
        <tr>
            <th>
                id
            </th>
            <th>
                title
            </th>
            <th>
                content
            </th>
        </tr>
        @foreach($post as $dt)
        <tr>
            <td>
                {{ $dt->id }}
            </td>
            <td>
                {{ $dt->title }}
            </td>
            <td>
                {{ $dt->content }}
            </td>
        </tr>
        @endforeach
    </table>
</center>
    
</body>
</html>