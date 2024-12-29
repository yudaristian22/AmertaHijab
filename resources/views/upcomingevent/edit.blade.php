@extends('layouts.app')

@section('title')
    Data Event
@endsection

@section('content')
    <div class="container">
        <a href="/admin/upcomingevents" class="mb-3 btn btn-success">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('upcomingevents.update', $upcomingevent->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul"
                            value="{{ $upcomingevent->title }}">
                    </div>
                    @error('title')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="text" class="form-control" name="date" placeholder="Tanggal"
                            value="{{ $upcomingevent->date }}">
                    </div>
                    @error('date')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="short_description">Deskripsi</label>
                        <textarea name="short_description" id="short_description" cols="30" rows="10" class="form-control"
                            placeholder="Deskripsi">{{ $upcomingevent->short_description }}</textarea>
                    </div>
                    @error('short_description')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="content">Konten</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Konten">{{ $upcomingevent->content }}</textarea>
                    </div>
                    @error('content')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $upcomingevent->image }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image">
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
