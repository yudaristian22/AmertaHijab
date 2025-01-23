@extends('layouts.app')

@section('title')
    Data Contact Form
@endsection

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($contactforms as $contactform)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td> {{ $contactform->name }}</td>
                            <td> {{ $contactform->email }}</td>
                            <td>{{ $contactform->subject }}</td>
                            <td>{{ $contactform->message }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
