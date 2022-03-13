@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update Brand</h4>
        </div>
      <div class="card-body">
        <form action="{{ url('update-brand/'.$brand->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Nom de categorie</label>
                    <input type="text" value="{{ $brand->brand_name }}" required class="form-control" name="name" id="">
                </div>
                @if ($brand->image)
                    <img src="{{ asset('assets/uploads/products/brands/'.$brand->image) }}" alt="">
                @endif
                <div class="col-md-12">
                    <input type="file" class="form-control"  name="image" id="">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </form>
      </div>
    </div>
    
@endsection