@extends('layouts.app')

@section('title')
    Data BestSeller
@endsection

@section('content')
    <div class="container">
        <a href="/admin/bestsellers" class="mb-3 btn btn-primary">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('bestsellers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul">
                    </div>
                    @error('title')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input name="price" id="" cols="30" rows="10" class="form-control"
                            placeholder="Harga"></input>
                    </div>
                    @error('description')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    @error('image')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
