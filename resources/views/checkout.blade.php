@extends('layouts.header')
      <!-- Hero (Banners + Slider)-->
      @section('content')
       <!-- Page Title-->
       <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Vérifier</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <section class="col-lg-8">
            <!-- Steps-->
            <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
                <div class="step-progress"><span class="step-count">1</span></div>
                <div class="step-label"><i class="ci-cart"></i>Panier</div></a><a class="step-item active current" href="#">
                <div class="step-progress"><span class="step-count">2</span></div>
                <div class="step-label"><i class="ci-user-circle"></i>Détails</div></a><a class="step-item" href="#">
                <div class="step-progress"><span class="step-count">3</span></div>
                <div class="step-label"><i class="ci-card"></i>Paiement</div></a><a class="step-item" href="#">
                <div class="step-progress"><span class="step-count">4</span></div>
                <div class="step-label"><i class="ci-check-circle"></i>Revoir</div></a></div>
            <!-- Shipping address-->
            <form action="{{ url('place-order') }}" method="post">
              {{ csrf_field() }}
                <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-fn">Nom</label>
                      <input class="form-control" required name="fname" value="{{ Auth::user()->fname }}" type="text" id="checkout-fn">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-ln">Prénom</label>
                      <input class="form-control" required name="lname" value="{{ Auth::user()->lname }}" type="text" id="checkout-ln">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-email">Adresse e-mail</label>
                      <input class="form-control" required name="email" value="{{ Auth::user()->email }}" type="email" id="checkout-email">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-phone">Numéro de téléphone</label>
                      <input class="form-control" required name="phone" value="{{ Auth::user()->phone }}" type="text" id="checkout-phone">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-city">Pays</label>
                      <input class="form-control" required name="country" value="{{ Auth::user()->country }}" type="text" id="checkout-address-1">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label" for="checkout-address-1">Adresse</label>
                        <input class="form-control" required name="address" value="{{ Auth::user()->address }}" type="text" id="checkout-address-1">
                      </div>
                  </div>
                </div>
                <!-- Navigation (desktop)-->
                <div class="d-none d-lg-flex pt-4 mt-3">
                  <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="{{ url('cart') }}"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Retour au panier</span><span class="d-inline d-sm-none">Back</span></a></div>
                  <div class="w-50 ps-2"><button class="btn btn-primary d-block w-100" type="submit"><span class="d-none d-sm-inline">Confirmer</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></button></div>
                </div>
              </section>
              <!-- Sidebar-->
              <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                <div class="card">
                  <div class="card-body">
                    <h6>Détails</h6>
                    <hr>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Produit</th>
                            <th>Qty</th>
                            <th>Prix</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $total = 0;
                          @endphp
                          @foreach ($cartitems as $item)
                            <tr>
                              <td>{{ $item->product->product_name }}</td>
                              <td>{{ $item->prod_qty }}</td>
                              <td>{{ $item->product->price }} <small>MAD</small></td>
                            </tr>
                            @php
                              $total += $item->product->price * $item->prod_qty
                            @endphp
                          @endforeach
                          <tr>
                            <th>Total TTC</th>
                            <td>{{ $total }}</td>
                            <td>MAD</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </aside>
            </form>
        </div>
        <!-- Navigation (mobile)-->
        <div class="row d-lg-none">
          <div class="col-lg-8">
            <div class="d-flex pt-4 mt-3">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.html"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
              <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-shipping.html"><span class="d-none d-sm-inline">Proceed to Shipping</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </main>

      @endsection