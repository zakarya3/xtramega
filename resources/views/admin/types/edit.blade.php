@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Update Product</h4>
        </div>
      <div class="card-body">
        <form action="{{ url('update-type/'.$type->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Categories</label>
                    <select class="form-select" required>
                        <option value="">{{ $type->category->category_name }}</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Nom de type</label>
                    <input type="text" class="form-control" required value="{{ $type->name }}" name="name" id="">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </form>
      </div>
    </div>
    
@endsection