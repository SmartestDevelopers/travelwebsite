@extends('layouts.admin')

@section('content')

@endsection
    <title>Packages</title>
</head>
<body>
    <h1>Packages</h1>
    <ul>
        @foreach ($packages as $package)
            <li>
                <h2>{{ $package->name }}</h2>
                <p>{{ $package->description }}</p>
                <p>Price: ${{ $package->price }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>