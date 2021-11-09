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
                          <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                          <li class="breadcrumb-item text-nowrap"><a href="home-marketplace.html">Market</a>
                          </li>
                          <li class="breadcrumb-item text-nowrap active" aria-current="page">Inside category</li>
                        </ol>
                      </nav>
                    </div>
                    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                      <h1 class="h3 text-light mb-0">Marketplace category</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container pb-5 mb-2 mb-md-4">
                <!-- Products grid-->
                <div class="row pt-3 mx-n2">
                  <!-- Product-->
                  <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
                    <div class="card product-card-alt">
                      <div class="product-thumb">
                          <a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="/img/marketplace/products/12.jpg" alt="Product">
                      </div>
                      <div class="card-body">
                        <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Corporate Branding Mockup (PSD)</a></h3>
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                          <div class="fs-sm me-2"><i class="ci-store text-muted me-1"></i>122<span class="fs-xs ms-1">Produits</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-3">
                <!-- Pagination-->
                <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
                  </ul>
                  <ul class="pagination">
                    <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
                  </ul>
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
                  </ul>
                </nav>
              </div>
            </main>
      @endsection