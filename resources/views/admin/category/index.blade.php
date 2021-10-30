@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <h4>Category page</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom de la categorie</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($category as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->category_name }}</td>
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