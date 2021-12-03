@extends('layouts.header')
      <!-- Hero (Banners + Slider)-->
      @section('content')
      <!-- used for shop templates with filters on top-->
      <div class="bg-dark pt-4 pb-5">
        <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
          <div class="d-lg-flex justify-content-between pb-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Accueil</a></li>
                  <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                  </li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">Grid filters on top</li>
                </ol>
              </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
              <h1 class="h3 text-light mb-0">Shop grid filters on top</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <!-- Toolbar-->
        <div class="bg-light shadow-lg rounded-3 p-4 mt-n5 mb-4">
          <div class="d-flex justify-content-between align-items-center">
            <div class="dropdown me-2"><a class="btn btn-outline-secondary dropdown-toggle" href="#shop-filters" data-bs-toggle="collapse"><i class="ci-filter me-2"></i>Filters</a></div>
          </div>
          <!-- Toolbar with expandable filters-->
          <div class="collapse" id="shop-filters">
            <div class="row pt-4">
              <div class="col-lg-4 col-sm-6">
                <!-- Categories-->
                <div class="card mb-grid-gutter">
                  <div class="card-body px-4">
                    <div class="widget widget-categories">
                      <h3 class="widget-title">Categories</h3>
                      <div class="accordion mt-n1" id="shop-categories">
                        <!-- Shoes-->
                        <div class="accordion-item">
                          @foreach ($type as $tp)
                          <h3><a class="accordion-button collapsed" href="{{ url('/products/'.$tp->category->category_name.'/'.$tp->name) }}">{{ $tp->name }}</a></h3>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <!-- Filter by Size-->
                <div class="card mb-grid-gutter">
                  <div class="card-body px-4">
                    <div class="widget widget-categories">
                      <h3 class="widget-title">Marque</h3>
                      <div class="accordion mt-n1" id="shop-categories">
                        <!-- Shoes-->
                        <div class="accordion-item">
                          @foreach ($brands as $item)
                          <h3 style="display: flex; justify-content: center; align-items: center"><a class="accordion-button collapsed" href="{{ url('/products/order-by-brand/'.$tp->category->category_name.'/'.$item->id) }}">{{ $item->brand_name }}</a><img src="{{ asset('assets/uploads/products/brands/'.$item->image) }}" width="50" alt=""></h3>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Products grid-->
        <div class="row pt-3 mx-n2">
          <!-- Product-->
          @foreach ($product as $prd)
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="{{ url('product/'.$prd->type->name.'/'.$prd->product_name) }}"><img src="{{ asset('assets/uploads/products/images/'.$prd->image) }}" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{ $prd->type->name }}</a>
                <h3 class="product-title fs-sm"><a href="{{ url('product/'.$prd->type->name.'/'.$prd->product_name) }}">{{ $prd->product_name }}</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">{{ $prd->price }}.<small>00 DH</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $prd->id }}" name="id">
                  <input type="hidden" value="{{ $prd->product_name }}" name="name">
                  <input type="hidden" value="{{ $prd->price }}" name="price">
                  <input type="hidden" value="{{ $prd->image }}"  name="image">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                </form>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          @endforeach
        </div>
        <!-- Banners-->
        <!-- Products grid-->
        <hr class="my-3">
        <!-- Pagination-->
        <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item"></li>
          </ul>
          <ul class="pagination-bolock">
            {{ $product->links('layouts.paginationlinks') }}
          </ul>
          <ul class="pagination">
            <li class="page-item"></li>
          </ul>
        </nav>
      </div>
    </main>
    @endsection