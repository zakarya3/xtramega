@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <h4>Type page</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Categorie</th>
              <th>Nom de type</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($type as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->category->category_name }}</td>
                <td>{{ $item->name }}</td>
                <td>
                  <a href="{{ url('edit-type/'.$item->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                  <a href="{{ url('delete-type/'.$item->id) }}" class="btn bg-danger btn-sm" style="color: white">Supprimer</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
@endsection