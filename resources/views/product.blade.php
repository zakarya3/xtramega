@extends('layouts.header')
      <!-- Hero (Banners + Slider)-->
      @section('content')
      <!-- used for shop templates with filters on top-->
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Accueil</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">{{ $product->type->name }}</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $product->product_name }}</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">{{ $product->product_name }}</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- Gallery + details-->
        <div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5 product_data">
          <div class="px-lg-3">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pe-lg-0 pt-lg-4">
                <div class="product-gallery">
                  <div class="product-gallery-preview order-sm-2">
                    <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="{{ asset('assets/uploads/products/images/'.$product->image) }}" data-zoom="img/shop/single/gallery/01.jpg" alt="Product image">
                      <div class="image-zoom-pane"></div>
                    </div>
                    <div class="product-gallery-preview-item" id="second"><img class="image-zoom" src="{{ asset('assets/uploads/products/brands/'.$product->brand->image) }}" data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                      <div class="image-zoom-pane"></div>
                    </div>
                  </div>
                  <div class="product-gallery-thumblist order-sm-1"><a class="product-gallery-thumblist-item active" href="#first"><img src="{{ asset('assets/uploads/products/images/'.$product->image) }}" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#second"><img src="{{ asset('assets/uploads/products/brands/'.$product->brand->image) }}" alt="Product thumb"></a></div>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0">
                <div class="product-details ms-auto pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div></a>
                    <button class="btn-wishlist me-0 me-lg-n3" type="button" data-bs-toggle="tooltip" title="Add to wishlist"><i class="ci-heart"></i></button>
                  </div>
                  <div class="mb-3"><span class="h3 fw-normal text-accent me-1">{{ $product->price }}.<small>00 MAD</small></span></div>
                  @if ($product->qty > 0)
                  <label for="" class="badge bg-success">In stock</label>
                  <input type="hidden" value="{{ $product->id }}" class="prod_id">
                  <div class="row mt-2">
                    <div class="input-group quantity" style="width: 160px !important; margin-bottom: 1em">
                      <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                          <span class="input-group-text">-</span>
                      </div>
                      <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                      <div class="input-group-append increment-btn" style="cursor: pointer">
                          <span class="input-group-text">+</span>
                      </div>
                    </div>
                    <div class="col-md-9" style="width: 100% !important">
                      @if (Auth::check())
                        <button class="btn btn-primary btn-shadow addToCartBtn d-block w-100" type="submit"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                      @else
                        <a class="btn btn-primary btn-shadow " href="/login">Connexion</a>
                      @endif
                    </div>
                  </div>
                  @else
                      <label for="" class="badge bg-danger">Out of stock</label>
                  @endif
                  <!-- Product panels-->
                  <div class="accordion mb-4" id="productPanels">
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button" href="#productInfo" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Description</a></h3>
                      <div class="accordion-collapse collapse show" id="productInfo" data-bs-parent="#productPanels">
                        <div class="accordion-body">
                         <p>{{ $product->product_description }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i>Shipping options</a></h3>
                      <div class="accordion-collapse collapse" id="shippingOptions" data-bs-parent="#productPanels">
                        <div class="accordion-body fs-sm">
                          <p>livraison sous 2-5 Jours</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button collapsed" href="#details" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="details"><i class="ci-add text-muted lead align-middle mt-n1 me-2"></i>Détails du produit</a></h3>
                        <div class="accordion-collapse collapse" id="details" data-bs-parent="#productPanels">
                          <div class="accordion-body fs-sm">
                            <div class="d-flex justify-content-between border-bottom py-2">
                              <img src="{{ asset('assets/uploads/products/brands/'.$product->brand->image) }}" alt="">
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                              <div>
                                <div class="fw-semibold text-dark">Référence</div>
                              </div>
                              <div>{{ $product->product_reference }}</div>
                            </div>
                            <div class="d-flex justify-content-between pt-2">
                              <div>
                                <div class="fw-semibold text-dark">Références spécifiques</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <!-- Sharing-->
                  <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label><a class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#"><i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#"><i class="ci-facebook"></i>Facebook</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Product description section 2-->
      </div>
      <!-- Reviews-->
      
      <!-- Product carousel (Style with)-->
      <div class="container pt-5">
        <h2 class="h3 text-center pb-4">Style with</h2>
        <div class="tns-carousel tns-controls-static tns-controls-outside" style="margin-bottom: 5em">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            @foreach ($products as $prd)
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="{{ asset('assets/uploads/products/images/'.$prd->image) }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{ $prd->type->name }}</a>
                  <h3 class="product-title fs-sm"><a href="#">{{ $prd->product_name }}</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">{{ $prd->price }}.<small>00 MAD</small></span></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </main>
    @endsection

    @section('scripts')
     
    @endsection