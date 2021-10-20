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
            <h1 class="h3 text-light mb-0">Checkout</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <section class="col-lg-8">
            <!-- Steps-->
            <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
                <div class="step-progress"><span class="step-count">1</span></div>
                <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active current" href="checkout-details.html">
                <div class="step-progress"><span class="step-count">2</span></div>
                <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item" href="checkout-shipping.html">
                <div class="step-progress"><span class="step-count">3</span></div>
                <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item" href="checkout-review.html">
                <div class="step-progress"><span class="step-count">4</span></div>
                <div class="step-label"><i class="ci-check-circle"></i>Review</div></a></div>
            <!-- Shipping address-->
            <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-fn">First Name</label>
                  <input class="form-control" type="text" id="checkout-fn">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-ln">Last Name</label>
                  <input class="form-control" type="text" id="checkout-ln">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-email">E-mail Address</label>
                  <input class="form-control" type="email" id="checkout-email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-phone">Phone Number</label>
                  <input class="form-control" type="text" id="checkout-phone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-city">Country</label>
                  <select class="form-select" id="checkout-city">
                    <option>Xtramega Agadir</option>
                    <option>Xtramega Maroc</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                    <label class="form-label" for="checkout-address-1">Address</label>
                    <input class="form-control" type="text" id="checkout-address-1">
                  </div>
              </div>
            </div>
            <!-- Navigation (desktop)-->
            <div class="d-none d-lg-flex pt-4 mt-3">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.html"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
              <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-shipping.html"><span class="d-none d-sm-inline">Proceed to Shipping</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
            </div>
          </section>
          <!-- Sidebar-->
          <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
            <div class="bg-white rounded-3 shadow-lg p-4">
              <div class="py-2 px-xl-2">
                <div class="text-center mb-4 pb-3 border-bottom">
                  <h2 class="h6 mb-3 pb-1">2 articles</h2>
                  <h3 class="fw-normal">$265.<small>00</small></h3>
                </div>
                <div class="accordion" id="order-options">
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button" href="#promo-code" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="promo-code">Livraison</a></h3>
                    <div class="accordion-collapse collapse show" id="promo-code" data-bs-parent="#order-options">
                      <form class="accordion-body needs-validation" method="post" novalidate>
                        <span class="btn btn-outline-primary d-block w-100">Gratuit</span>
                      </form>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button" href="#price" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="price">Total TTC</a></h3>
                    <div class="accordion-collapse collapse show" id="price" data-bs-parent="#order-options">
                      <form class="accordion-body needs-validation" method="post" novalidate>
                        <span class="btn btn-outline-primary d-block w-100">2 184,00 DH/TTC
                        </span>
                      </form>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button" href="#inclus" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="inclus">Taxes incluses</a></h3>
                    <div class="accordion-collapse collapse show" id="inclus" data-bs-parent="#order-options">
                      <form class="accordion-body needs-validation" method="post" novalidate>
                        <span class="btn btn-outline-primary d-block w-100">364,00 DH/TTC
                        </span>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
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