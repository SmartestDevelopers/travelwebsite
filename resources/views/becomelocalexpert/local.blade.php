@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Local Experts List</h1>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Location</th>
                <th>Expertise</th>
                <th>Experience (Years)</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locallists as $local)
                <tr>
                    <td>{{ $local->id }}</td>
                    <td>{{ $local->name }}</td>
                    <td>{{ $local->email }}</td>
                    <td>{{ $local->phone }}</td>
                    <td>{{ $local->location }}</td>
                    <td>{{ $local->expertise }}</td>
                    <td>{{ $local->experience }}</td>
                    <td>{{ ucfirst($local->availability) }}</td>
                    <td>
                        <a href="{{ url('local-expert/edit', $local->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ url('local-expert/delete', $local->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this expert?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection