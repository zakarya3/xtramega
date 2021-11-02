@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <h4>Products page</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom du produit</th>
              <th>Référence</th>
              <th>Prix</th>
              <th>image</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->product_fullname }}</td>
                <td>{{ $item->product_reference }}</td>
                <td>{{ $item->price }}</td>
                <td>
                  <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="image here">
                </td>
                <td>
                  <a href="{{ url('edit-cat/'.$item->id) }}" class="btn btn-primary">Modifier</a>
                  <a href="{{ url('delete-category/'.$item->id) }}" class="btn bg-danger" style="color: white">Supprimer</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
@endsection