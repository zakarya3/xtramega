@extends('layouts.header')
      <!-- Hero (Banners + Slider)-->
      @section('content')
            <!-- Used for marketplace templates with filters on top-->
            <div class="bg-accent pt-4 pb-5">
                <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
                  <div class="d-lg-flex justify-content-between pb-3">
                    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                          <li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="ci-home"></i>Accueil</a></li>
                          <li class="breadcrumb-item text-nowrap active" aria-current="page">Nos Marques</li>
                        </ol>
                      </nav>
                    </div>
                    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                      <h1 class="h3 text-light mb-0">Nos Marques</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container pb-5 mb-2 mb-md-4">
                <!-- Products grid-->
                <div class="row pt-3 mx-n2">
                  @foreach ($brands as $item)
                    <!-- Product-->
                    <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
                      <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/uploads/products/brands/'.$item->image) }}" style="padding: 30px; height: 25vh;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->brand_name }}</h5>
                          <p class="card-text"><i class="ci-store text-muted me-1"></i>Produits</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
                <hr class="my-3">
              </div>
            </main>
      @endsection