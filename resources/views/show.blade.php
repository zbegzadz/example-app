<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>{{ $planet->name }}</title>
</head>
<body>
    <h1>{{ $planet->name }}</h1>

    <p>
        <strong>Zonnestelsel:</strong>
        {{ $planet->solarSystem->name }}
    </p>

    <p>{{ $planet->description }}</p>
</body>
</html>
