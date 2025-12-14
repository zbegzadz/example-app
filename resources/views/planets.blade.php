<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planet List</h1>
    <ul>
        @foreach($planets as $planet)
            <li>
                {{ $planet->name }}
                (Zonnestelsel: {{ $planet->solarSystem->name }})
            </li>
        @endforeach
    </ul>

    <h2>Planet Details (Database)</h2>
    @foreach($planets as $planet)
        <div style="margin-bottom: 20px;">
            <h3>{{ $planet->name }}</h3>

            <p>
                <strong>Zonnestelsel:</strong>
                {{ $planet->solarSystem->name }}
            </p>

            <p>{{ $planet->description }}</p>
        </div>
    @endforeach
</body>
</html>
