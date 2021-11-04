@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
      <div class="card-body">
        <form action="{{ url('insert-product') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Categories</label>
                    <select class="form-select" name="cate_id">
                        <option value="">Select a Category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">La marque</label>
                    <select class="form-select" name="brand">
                        <option value="">Select a brand</option>
                        @foreach ($brand as $item)
                        <option value="{{ $item->id }}">{{ $item->brand_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Nom de produit</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Titre de produit</label>
                    <input type="text" class="form-control" name="title" id="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Descriprion</label>
                    <textarea name="description" rows="10" class="form-control"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantité</label>
                    <input type="number" class="form-control" name="qty" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" class="form-control" name="tax" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Prix</label>
                    <input type="number" class="form-control" name="price" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Réference</label>
                    <input type="text" class="form-control" name="ref" id="">
                </div>
                <div class="col-md-12">
                    <label for="">Image du produit</label>
                    <input type="file" class="form-control" name="image" id="">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </form>
      </div>
    </div>
    
@endsection