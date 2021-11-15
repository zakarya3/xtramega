@extends('layouts.header')
      <!-- Hero (Banners + Slider)-->
      @section('content')
       <!-- Page Title-->
       <<div class="page-title-overlap bg-dark pt-4">
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
                <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active" href="checkout-details.html">
                <div class="step-progress"><span class="step-count">2</span></div>
                <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item active" href="checkout-shipping.html">
                <div class="step-progress"><span class="step-count">3</span></div>
                <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item" href="checkout-review.html">
                <div class="step-progress"><span class="step-count">4</span></div>
                <div class="step-label"><i class="ci-check-circle"></i>Review</div></a></div>
            <!-- Shipping address-->
            <!-- Payment methods accordion-->
            <h2 class="h6 pb-3 mb-2">Choose payment method</h2>
            <div class="accordion mb-2" id="payment-method">
              <div class="accordion-item">
                <h3 class="accordion-header"><a class="accordion-button" href="#card" data-bs-toggle="collapse"><i class="ci-coins fs-lg me-2 mt-n1 align-middle"></i>Payer par chèque</a></h3>
                <div class="accordion-collapse collapse show" id="card" data-bs-parent="#payment-method">
                  <div class="accordion-body">
                    <p class="fs-sm">Veuillez nous envoyer votre chèque en suivant ces indications :</p>
                    <div class="credit-card-wrapper"></div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                              <th>Montant</th>
                              <th>5 316,00 DH/TTC TTC</th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Bénéficiaire</td>
                              <td>logicatel</td>
                            </tr>
                            <tr>
                              <td>Envoyez votre chèque à cette adresse</td>
                              <td>Logicatel Maroc
                                Hay El Wafa, Rue 701 N°24
                                80060 Agadir Maroc</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#paypal" data-bs-toggle="collapse"><i class="ci-dollar-circle me-2 align-middle"></i>Payer par virement bancaire</a></h3>
                <div class="accordion-collapse collapse" id="paypal" data-bs-parent="#payment-method">
                  <div class="accordion-body fs-sm">
                    <p>Il vous faudra transférer le montant de la facture sur notre compte bancaire. Vous recevrez votre confirmation de commande par e-mail, comprenant nos coordonnées bancaires et le numéro de commande. Les biens seront mis de côté 72 jours pour vous et nous traiterons votre commande dès la réception du paiement. En savoir plus</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#points" data-bs-toggle="collapse"><i class="ci-delivery me-2"></i>Payer comptant à la livraison</a></h3>
                <div class="accordion-collapse collapse" id="points" data-bs-parent="#payment-method">
                  <div class="accordion-body">
                    <p>Vous payez lors de la livraison de votre commande</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Navigation (desktop)-->
            <div class="d-none d-lg-flex pt-4">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="{{ url('cart') }}"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Retour au panier</span><span class="d-inline d-sm-none">Back</span></a></div>
              <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="{{ url('checkout-complete') }}"><span class="d-none d-sm-inline">Terminé</span><span class="d-inline d-sm-none">Terminé</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
            </div>
          </section>
        </div>
        <!-- Navigation (mobile)-->
        <div class="row d-lg-none">
          <div class="col-lg-8">
            <div class="d-flex pt-4 mt-3">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="{{ url('cart') }}"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Retour au panier</span><span class="d-inline d-sm-none">Back</span></a></div>
              <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="{{ url('checkout-complete') }}"><span class="d-none d-sm-inline">Terminé</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </main>

      @endsection