<html>
<head>
    <title>Hotels</title>
</head>
<body>
    <h1>Hotels</h1>
    <ul>
        @foreach ($hotels as $hotel)
            <li>
                <h2>{{ $hotel->name }}</h2>
                <p>Location: {{ $hotel->location }}</p>
                <p>Price per Night: ${{ $hotel->price_per_night }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>