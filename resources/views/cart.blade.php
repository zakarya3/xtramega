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
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
        <h1 class="h3 text-light mb-0">Your cart</h1>
      </div>
    </div>
  </div>
  <div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
      <!-- List of items-->
      <section class="col-lg-8">
        <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
          <h2 class="h6 text-light mb-0">Products</h2><a class="btn btn-outline-primary btn-sm ps-2" href="shop-grid-ls.html"><i class="ci-arrow-left me-2"></i>Continue shopping</a>
        </div>
        <!-- Item-->
        <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
          <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="/img/shop/cart/04.jpg" width="160" alt="Product"></a>
            <div class="pt-2">
              <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h3>
              <div class="fs-lg text-accent pt-2">$9.<small>00</small></div>
            </div>
          </div>
          <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
            <label class="form-label" for="quantity4">Quantity</label>
            <input class="form-control" type="number" id="quantity4" min="1" value="1">
            <button class="btn btn-link px-0 text-danger" type="button"><i class="ci-close-circle me-2"></i><span class="fs-sm">Remove</span></button>
          </div>
        </div>
        <button class="btn btn-outline-accent d-block w-100 mt-4" type="button"><i class="ci-arrow-left fs-base me-2"></i>Continuer Mes Achats</button>
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
            <a class="btn btn-primary btn-shadow d-block w-100 mt-4" href="checkout-details.html"><i class="ci-card fs-lg me-2"></i>Commander</a>
          </div>
        </div>
      </aside>
    </div>
  </div>
</main>
@endsection