<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>{{ $planet['name'] ?? $dbPlanet->name }}</title>
</head>
<body>
    <h1>{{ $planet['name'] ?? $dbPlanet->name }}</h1>
    <p>{{ $planet['description'] ?? $dbPlanet->description }}</p>
</body>
</html>
