
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
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img src="img/impression.png" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/façon.png" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="img/experience.jpg" class="d-block w-100" alt="">
                  </div>
                </div>
              </div>
            </div>
            <!-- Banner group-->
            <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
              <div class="table-responsive" data-simplebar>
                <div class="d-flex d-xl-block">
                  <a class="d-flex align-items-center bg-faded-info rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0" href="#" style="min-width: 16rem;"><img src="img/xtra1.jpg" width="200" alt="Banner"></a>
                  <a class="d-flex align-items-center bg-faded-warning rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0" href="#" style="min-width: 16rem;"><img src="img/xtra.jpg" width="200" alt="Banner"></a>
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
          <h2 class="h3 mb-0 pt-3 me-2">Trending products</h2>
          <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="shop-grid-ls.html">More products<i class="ci-arrow-right ms-1 me-n1"></i></a></div>
        </div>
        <!-- Grid-->
        <div class="row pt-2 mx-n2">
          <!-- Product-->
          @foreach ($featured_products as $item)
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" alt="Product"></a>
              <div class="card-body py-2">
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">{{ $item->product_name }}</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">{{ $item->price }},<small>00</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
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
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="img/shop/brands/13.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="img/shop/brands/14.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="img/shop/brands/17.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="img/shop/brands/16.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="img/shop/brands/15.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="img/shop/brands/18.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="img/shop/brands/19.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="img/shop/brands/20.png" style="width: 165px;" alt="Brand"></a></div>
          </div>
        </div>
      </section>
      <!-- Product widgets-->
      <section class="container pb-4 pb-md-5">
        <div class="row">
          <!-- Bestsellers-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Bestsellers</h3>
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/cart/widget/05.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$259.<small>00</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/cart/widget/06.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud Security Camera</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$122.<small>00</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/cart/widget/07.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S10</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$799.<small>00</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/cart/widget/08.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smart TV Box</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$67.<small>00</small></span>
                    <del class="text-muted fs-xs">$90.<small>43</small></del>
                  </div>
                </div>
              </div>
              <p class="mb-0">...</p><a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
          <!-- New arrivals-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">New arrivals</h3>
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/widget/06.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Monoblock Desktop PC</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$1,949.<small>00</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/widget/07.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Laserjet Printer All-in-One</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/widget/08.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Console Controller Charger</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$14.<small>97</small></span>
                    <del class="text-muted fs-xs">$16.<small>47</small></del>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/widget/09.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Smart Watch Series 5, Aluminium</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$349.<small>99</small></span></div>
                </div>
              </div>
              <p class="mb-0">...</p><a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
          <!-- Top rated-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Top rated</h3>
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/widget/10.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S9</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$749.<small>99</small></span>
                    <del class="text-muted fs-xs">$859.<small>99</small></del>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/widget/11.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/widget/12.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">360 Degrees Camera</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$98.<small>75</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="img/shop/widget/13.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Digital Camera 40MP</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$210.<small>00</small></span>
                    <del class="text-muted fs-xs">$249.<small>00</small></del>
                  </div>
                </div>
              </div>
              <p class="mb-0">...</p><a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer-->
 @endsection