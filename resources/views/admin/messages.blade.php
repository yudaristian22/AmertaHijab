@extends('layouts.app')

@section('title')
    Messages
@endsection

@section('content')
    <div class="container">
        <h1>Messages</h1>
        @if (session('messages'))
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (session('messages') as $index => $message)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $message['name'] }}</td>
                                <td>{{ $message['email'] }}</td>
                                <td>{{ $message['subject'] }}</td>
                                <td>{{ $message['message'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No messages found.</p>
        @endif
    </div>
@endsection
