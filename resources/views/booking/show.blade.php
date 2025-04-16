@extends('layouts.admin')

@section('content')


<div class="container">

<h1>Bookng list</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>destination</th>
                <th>duration</th>
                <th>guest_adults</th>
                <th>guest_children</th>
                <th>price</th>
                <th>status</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>action</th>
                </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->destination }}</td>
                <td>{{ $booking->duration }}</td>
                <td>{{ $booking->guest_adults }}</td>
                <td>{{ $booking->guest_children }}</td>
                <td>{{ $booking->price }}</td>
                <td>{{ $booking->status }}</td>
                <td>{{ $booking->created_at }}</td>
                <td>{{ $booking->updated_at }}</td>
                <td>
                    <a href="{{ url('booking.edit', $booking->id) }}">Edit</a>
                    <a href="{{ url('booking.destroy', $booking->id) }}">Delete</a>
                    </td>
                    </tr>
            @endforeach
        </tbody>
        </table>
</div>


@endsection