
@extends('layouts.header') 
      <!-- Hero (Banners + Slider)-->
      @section('content')
      <section class="bg-secondary py-4 pt-md-5">
        <div class="container py-xl-2">
          <div class="row">
            <!-- Slider     -->
            <div class="col-xl-9 pt-xl-4 order-xl-2">
              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="/img/impression.png" style="width: 100% !important; object-fit: contain" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="10000">
                    <img src="/img/façon.png" style="width: 100% !important; object-fit: contain" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="10000">
                    <img src="/img/experience.jpg" style="width: 100% !important; object-fit: contain" class="d-block w-100" alt="">
                  </div>
                </div>
              </div>
            </div>
            <!-- Banner group-->
            <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
              <div class="table-responsive" data-simplebar>
                <div class="d-flex d-xl-block">
                  <a class="d-flex align-items-center bg-faded-info rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0" href="#" style="min-width: 16rem;"><img src="/img/xtra1.jpg" width="200" alt="Banner"></a>
                  <a class="d-flex align-items-center bg-faded-warning rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0" href="#" style="min-width: 16rem;"><img src="/img/xtra.jpg" width="200" alt="Banner"></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Products grid (Trending products)-->
      <section class="container pt-5">
        <!-- Heading-->
        <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
          <h2 class="h3 mb-0 pt-3 me-2">Produits tendance</h2>
          <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="">More products<i class="ci-arrow-right ms-1 me-n1"></i></a></div>
        </div>
        <!-- Grid-->
        <div class="row pt-2 mx-n2">
          <!-- Product-->
          @foreach ($featured_products as $item)
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="{{ url('product/'.$item->type->name.'/'.$item->product_name) }}"><img src="{{ asset('/assets/uploads/products/images/'.$item->image) }}" alt="Product"></a>
              <div class="card-body py-2">
                <h3 class="product-title fs-sm"><a href="{{ url('product/'.$item->type->name.'/'.$item->product_name) }}">{{ $item->product_name }}</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">{{ $item->price }},<small>00</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $item->id }}" name="id">
                  <input type="hidden" value="{{ $item->product_name }}" name="name">
                  <input type="hidden" value="{{ $item->price }}" name="price">
                  <input type="hidden" value="{{ $item->image }}"  name="image">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                </form>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          @endforeach
        </div>
      </section>
      <!-- Promo banner-->
      <!-- Brands carousel-->
      <section class="container mb-5" style="margin: 2em 0">
        <div class="tns-carousel border-end">
          <div class="tns-carousel-inner" data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            @foreach ($brands as $brand)
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('assets/uploads/products/brands/'.$brand->image) }}" style="width: 165px; height: 8vh;; object-fit: contain" alt="Brand"></a></div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- Product widgets-->
      <section class="container pb-4 pb-md-5">
        <div class="row">
          <!-- Bestsellers-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Nouveaux</h3>
              @foreach ($new as $item)
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="{{ url('product/'.$item->type->name.'/'.$item->product_name) }}"><img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="{{ url('product/'.$item->type->name.'/'.$item->product_name) }}">{{ $item->product_name }}</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">{{ $item->price }}.<small>00 MAD</small></span></div>
                </div>
              </div>
              @endforeach
              <p class="mb-0">...</p><a class="fs-sm" href="">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
          <!-- New arrivals-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Moins de quantité</h3>
              @foreach ($qty as $item)
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="{{ url('product/'.$item->type->name.'/'.$item->product_name) }}"><img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="{{ url('product/'.$item->type->name.'/'.$item->product_name) }}">{{ $item->product_name }}</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">{{ $item->price }}.<small>00 MAD</small></span></div>
                </div>
              </div>
              @endforeach
              <p class="mb-0">...</p><a class="fs-sm" href="l">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
          <!-- Top rated-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Aussi</h3>
              @foreach ($random as $item)
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="{{ url('product/'.$item->type->name.'/'.$item->product_name) }}"><img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="{{ url('product/'.$item->type->name.'/'.$item->product_name) }}">{{ $item->product_name }}</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">{{ $item->price }}.<small>00 MAD</small></span></div>
                </div>
              </div>
              @endforeach
              <p class="mb-0">...</p><a class="fs-sm" href="l">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer-->
 @endsection