@extends('layouts.admin')

@section('content')
    <div class="card">
      <div class="card-header">
        <h4>Users page</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name.' '.$item->fname }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>
                  <a href="{{ url('view-users/'.$item->id) }}" class="btn bg-danger btn-sm" style="color: white">Vue</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
@endsection