<!DOCTYPE html>
<html>
<head>
    <title>Database Record</title>
    <link href="css/app.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <ul>
        <li style="margin-left : 450px"><a href="/assignment-record">View assignment record</a></li>

    </ul>


    <table border="1">
        <tr>
            <td>ID</td>
            <td>Assignment Mark - 1</td>
            <td>Assignment Mark - 2</td>
            <td>Assignment Mark - 3</td>
        </tr>
        @foreach ($marks as $mark)
        <tr>
            <td>{{ $mark->id }}</td>
            <td>{{ $mark->mark1 }}</td>
            <td>{{ $mark->mark2 }}</td>
            <td>{{ $mark->mark3 }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
