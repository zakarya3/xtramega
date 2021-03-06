@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add a Brand</h4>
        </div>
      <div class="card-body">
        <form action="{{ url('insert-brand') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Nom de la marque</label>
                    <input type="text" class="form-control" required name="name" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Image</label>
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