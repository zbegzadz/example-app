<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>
    <ul>
        @foreach($data as $planet)
            <li>{{ $planet }}</li>
        @endforeach
    </ul>
</body>
</html>
