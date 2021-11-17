@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Type</h4>
        </div>
      <div class="card-body">
        <form action="{{ url('insert-type') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Categories</label>
                    <select class="form-select" required name="categ">
                        <option value="">Select a categorie</option>
                        @foreach ($categorie as $item)
                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Nom de type</label>
                    <input type="text" class="form-control" required name="name" id="">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </form>
      </div>
    </div>
    
@endsection