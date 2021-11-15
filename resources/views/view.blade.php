@extends('layouts.header')
      <!-- Hero (Banners + Slider)-->
@section('content')
<!-- Page Title-->
<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="ci-home"></i>Home</a></li>
            <li class="breadcrumb-item text-nowrap"><a href="{{ url('/') }}">Shop</a>
            </li>
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Vue de la commande</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
        <h1 class="h3 text-light mb-0">Ma commande</h1>
      </div>
    </div>
  </div>
  <div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
      <!-- List of items-->
      <section class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="">Nom</label>
                        <div class="form-control">{{ $orders->fname }}</div>
                        <label class="form-label" for="">Prenom</label>
                        <div class="form-control">{{ $orders->lname }}</div>
                        <label class="form-label" for="">Email</label>
                        <div class="form-control">{{ $orders->email }}</div>
                        <label class="form-label" for="">Téléphone</label>
                        <div class="form-control">{{ $orders->phone }}</div>
                        <label class="form-label" for="">Adresse</label>
                        <div class="form-control">{{ $orders->address }}</div>
                    </div>
                    <div class="col-md-6">
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
                            <a class="btn btn-outline-primary btn-sm ps-2" href="{{ url('myorders') }}"><i class="ci-arrow-left me-2"></i>Mes commandes</a>
                          </div>
                    </div>
                </div>
            </div>
          </div>
      </section>
    </div>
  </div>
</main>
@endsection