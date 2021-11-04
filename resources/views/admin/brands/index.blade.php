@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <h4>Brand page</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom de la brand</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($brand as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->brand_name }}</td>
                <td>
                  <a href="{{ url('edit-brand/'.$item->id) }}" class="btn btn-primary">Modifier</a>
                  <a href="{{ url('delete-brand/'.$item->id) }}" class="btn bg-danger" style="color: white">Supprimer</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
@endsection