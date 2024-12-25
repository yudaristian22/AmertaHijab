@extends('layouts.app')

@section('title')
    Data BestSeller
@endsection

@section('content')
    <div class="container">
        <a href="/admin/bestsellers/create" class="mb-3 btn btn-success">Tambah Data</a>
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
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($bestsellers as $bestseller)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td> {{ $bestseller->product }}</td>
                            <td> {{ $bestseller->price }}</td>
                            <td>
                                <img src="/image/{{ $bestseller->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('bestsellers.edit', $bestseller->id) }}" class="mr-2 btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('bestsellers.destroy', $bestseller->id) }}" method="POST">
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
