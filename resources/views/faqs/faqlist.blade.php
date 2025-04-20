@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">FAQs List</h1>

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
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faqlists as $faq)
                <tr>
                    <td>{{ $faq->id }}</td>
                    <td>{{ $faq->name }}</td>
                    <td>{{ $faq->email }}</td>
                    <td>{{ $faq->message }}</td>
                    <td>{{ $faq->created_at }}</td>
                    <td>{{ $faq->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection