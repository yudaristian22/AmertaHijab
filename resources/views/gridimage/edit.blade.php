@extends('layouts.app')

@section('title')
    Data GridImage
@endsection

@section('content')
    <div class="container">
        <a href="/admin/gridimages" class="mb-3 btn btn-success">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('gridimages.update', $gridimage->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul"
                            value="{{ $gridimage->title }}">
                    </div>
                    @error('title')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $gridimage->description }}</textarea>
                    </div>
                    @error('description')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $gridimage->image }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    @error('image')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
