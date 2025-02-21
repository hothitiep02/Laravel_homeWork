<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>    
            </tr>
        </thead>
        <tbody>
            @foreach($data as $infor)
            <tr>
                <td>{{$infor['title'] }}</td>
                <td>{{$infor['body'] }}</td>     
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>