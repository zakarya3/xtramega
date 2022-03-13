@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Update Product</h4>
        </div>
      <div class="card-body">
        <form action="{{ url('update-product/'.$products->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Categories</label>
                    <select class="form-select">
                        <option value="">{{ $products->type->name }}</option>
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Marque</label>
                    <select class="form-select">
                        <option value="">{{ $products->brand->brand_name }}</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Nom de produit</label>
                    <input type="text" class="form-control" required value="{{ $products->product_fullname }}" name="name" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Titre de produit</label>
                    <input type="text" class="form-control" required value="{{ $products->product_name }}" name="title" id="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Descriprion</label>
                    <textarea name="description" rows="10" class="form-control" required>{{ $products->product_description }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantité</label>
                    <input type="number" class="form-control" required value="{{ $products->qty }}" name="qty" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Prix</label>
                    <input type="text" class="form-control" value="{{ $products->price}}" name="price" id="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Réference</label>
                    <input type="text" class="form-control" required value="{{ $products->product_reference }}" name="ref" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">status</label>
                    <input type="checkbox" {{ $products->status == "1" ? 'checked' : '' }} name="status" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Trendig</label>
                    <input type="checkbox" {{ $products->trending == "1" ? 'checked' : '' }} name="trending" id="">
                </div> 
                @if ($products->image)
                    <img src="{{ asset('assets/uploads/products/images/'.$products->image) }}" alt="">
                @endif
                <div class="col-md-12">
                    <input type="file" class="form-control" name="image" id="">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </form>
      </div>
    </div>
    
@endsection