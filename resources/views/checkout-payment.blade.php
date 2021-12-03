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
            <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="">
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
                              <th>{{ $total }} DH/TTC TTC</th>

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
            <div class="mt-3 px-2">
              <label for="">Sélectionnez le mode de paiement</label>
              <form action="{{ url('payment-method') }}" method="post">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="name_user" id="" value="{{ Session::get('name') }}">
                  <input type="hidden" name="phone" id="" value="{{ Session::get('phone') }}">
                  <input type="hidden" name="email" id="" value="{{ Session::get('email') }}">
                  <input type="hidden" name="address" id="" value="{{ Session::get('address') }}">
                  <input type="hidden" name="total" id="" value="{{ $total }}">
                  @foreach ($cartItems as $item)
                  <input type="hidden" name="id" id="" value="{{ $item->id }}">
                  <input type="hidden" name="name" id="" value="{{ $item->name }}">
                  <input type="hidden" name="price" id="" value="{{ $item->price }}">
                  <input type="hidden" name="quantity" id="" value="{{ $item->name }}">
                  @endforeach
                  <select class="form-select" name="order_choice">
                      <option value="0" >Payer par chèque</option>
                      <option value="1" >Payer par virement bancaire</option>
                      <option value="2" >Payer comptant à la livraison</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Confirmer</button>
              </form>
          </div>
      </div>
    </main>

      @endsection