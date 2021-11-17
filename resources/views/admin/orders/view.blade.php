@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6" style="width: 35%">
                <label class="form-label" for="">Nom</label>
                <div class="form-control"style= "border: none !important">{{ $orders->fname }}</div>
                <label class="form-label" for="">Prenom</label>
                <div class="form-control"style= "border: none !important">{{ $orders->lname }}</div>
                <label class="form-label" for="">Email</label>
                <div class="form-control"style= "border: none !important">{{ $orders->email }}</div>
                <label class="form-label" for="">Téléphone</label>
                <div class="form-control"style= "border: none !important">{{ $orders->phone }}</div>
                <label class="form-label" for="">Adresse</label>
                <div class="form-control"style= "border: none !important">{{ $orders->address }}</div>
            </div>
            <div class="col-md-6" style="width: 65%">
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Produit</th>
                          <th>Quantité</th>
                          <th>Prix</th>
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders->orderitems as $item)
                          <tr>
                            <td>{{ $item->product->product_name }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                               <img src="{{ asset('assets/uploads/products/images/'.$item->product->image) }}" style="width: 50px" alt="">
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <h6>Prix Total : {{ $orders->total_price }} MAD</h6>
                    <a class="btn btn-outline-primary btn-sm ps-2" href="{{ url('orders') }}"><i class="ci-arrow-left me-2"></i>Les commandes</a>
                    <div class="mt-3 px-2">
                        <label for="">Statut de la commande</label>
                        <form action="{{ url('update-order/'.$orders->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <select class="form-select" name="order_status">
                                <option {{ $orders->status == '0' ? 'selected':'' }} value="0" >en attendant</option>
                                <option {{ $orders->status == '1' ? 'selected':'' }} value="1" >complété</option>
                              </select>
                              <button type="submit" class="btn btn-primary mt-3">Modifier</button>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </div>
@endsection