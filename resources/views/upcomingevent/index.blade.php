@extends('layouts.app')

@section('title')
    Data Event
@endsection

@section('content')
    <div class="container">
        <a href="/admin/upcomingevents/create" class="mb-3 btn btn-success">Tambah Data</a>
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong></strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Konten</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($upcomingevents as $upcomingevent)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td> {{ $upcomingevent->title }}</td>
                            <td> {{ $upcomingevent->date }}</td>
                            <td> {{ $upcomingevent->short_description }}</td>
                            <td> {{ $upcomingevent->content }}</td>
                            <td>
                                <img src="/image/{{ $upcomingevent->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('upcomingevents.edit', $upcomingevent->id) }}"
                                        class="mr-2 btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('upcomingevents.destroy', $upcomingevent->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
