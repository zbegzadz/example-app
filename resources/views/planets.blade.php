<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planet List</h1>
    <ul>
        @foreach($data as $planet)
            <li>{{ $planet }}</li>
        @endforeach
    </ul>

    <h2>Planet Details</h2>
    @foreach($planets as $planet)
        <div style="margin-bottom: 20px;">
            <h3>{{ $planet['name'] }}</h3>
            <p>{{ $planet['description'] }}</p>
        </div>
    @endforeach
</body>
</html>
