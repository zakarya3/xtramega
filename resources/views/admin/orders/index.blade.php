@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
      <h6>Commandes
        <a href="{{ url('order-history') }}" style="color: white" class="btn bg-warning float-end">Historique des commandes</a>
      </h6>
      <hr>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
                <th>Date</th>
              <th>Numéro de suivi</th>
              <th>Prix total</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $item)
              <tr>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->tracking_no }}</td>
                <td>{{ $item->total_price }}</td>
                <td>{{ $item->status == '0' ? 'pending' : 'completed' }}</td>
                <td>
                    <a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-primary">Vue</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection