<html>
<head>
    <title>Car Rentals</title>
</head>
<body>
    <h1>Car Rentals</h1>
    <ul>
        @foreach ($carRentals as $carRental)
            <li>
                <h2>{{ $carRental->name }}</h2>
                <p>Type: {{ $carRental->type }}</p>
                <p>Price per Day: ${{ $carRental->price_per_day }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>