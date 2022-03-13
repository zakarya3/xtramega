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
                    <label for="">Types</label>
                    <select class="form-select" required name="cate_id">
                        <option value="">Select a type</option>
                        @foreach ($type as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                    <input type="text" class="form-control" required name="name" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Titre de produit</label>
                    <input type="text" class="form-control" required name="title" id="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Descriprion</label>
                    <textarea name="description" rows="10" class="form-control" required></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantité</label>
                    <input type="number" class="form-control" required name="qty" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Prix</label>
                    <input type="number" class="form-control" name="price" id="">
                </div>               
                <div class="col-md-12 mb-3">
                    <label for="">Réference</label>
                    <input type="text" class="form-control" required name="ref" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Nouveau</label>
                    <input type="checkbox" name="status" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tendance</label>
                    <input type="checkbox" name="trending" id="">
                </div> 
                <div class="col-md-12">
                    <label for="">Image du produit</label>
                    <input type="file" class="form-control" required name="image" id="">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </form>
      </div>
    </div>
    
@endsection