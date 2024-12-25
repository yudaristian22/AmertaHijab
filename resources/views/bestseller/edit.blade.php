@extends('layouts.app')

@section('title')
    Data BestSeller
@endsection

@section('content')
    <div class="container">
        <a href="/admin/bestsellers" class="mb-3 btn btn-primary">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('bestsellers.update', $bestseller->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="product">Product</label>
                        <input type="text" class="form-control" name="product" placeholder="Product"
                            value="{{ $bestseller->product }}">
                    </div>
                    @error('product')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price"
                            value="{{ $bestseller->price }}">
                    </div>
                    @error('price')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $bestseller->image }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="image">Image</label>
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
