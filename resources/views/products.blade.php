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
                  <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
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
                          <h3><a class="accordion-button collapsed" href="#shoes">{{ $tp->name }}</a></h3>
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
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/01.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$154.<small>00</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-75">
                    <label class="form-option-label" for="s-75">7.5</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                    <label class="form-option-label" for="s-80">8</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-85">
                    <label class="form-option-label" for="s-85">8.5</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-90">
                    <label class="form-option-label" for="s-90">9</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card"><span class="badge bg-danger badge-shadow">Sale</span>
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/02.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s T-shirt</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                    <del class="fs-sm text-muted">38.<small>50</small></del>
                  </div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color1" id="white" checked>
                    <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color1" id="blue">
                    <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color1" id="yellow">
                    <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color1" id="pink">
                    <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                  </div>
                </div>
                <div class="d-flex mb-2">
                  <select class="form-select form-select-sm me-2">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
                  <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                </div>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/03.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s Shorts</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Mom High Waist Shorts</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size2" id="xs">
                    <label class="form-option-label" for="xs">XS</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size2" id="s" checked>
                    <label class="form-option-label" for="s">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size2" id="m">
                    <label class="form-option-label" for="m">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size2" id="l">
                    <label class="form-option-label" for="l">L</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/04.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sportswear</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Women Sports Jacket</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size3" id="xs2" checked>
                    <label class="form-option-label" for="xs2">XS</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size3" id="s2">
                    <label class="form-option-label" for="s2">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size3" id="m2">
                    <label class="form-option-label" for="m2">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size3" id="l2">
                    <label class="form-option-label" for="l2">L</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/05.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Sunglasses</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-muted fs-sm">Out of stock</span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm d-block w-100 mb-2" href="shop-single-v1.html">View details</a>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/06.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Backpacks</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color2" id="khaki" checked>
                    <label class="form-option-label rounded-circle" for="khaki"><span class="form-option-color rounded-circle" style="background-color: #97947c;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color2" id="jeans">
                    <label class="form-option-label rounded-circle" for="jeans"><span class="form-option-color rounded-circle" style="background-color: #99a8be;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color2" id="white2">
                    <label class="form-option-label rounded-circle" for="white2"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/07.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women's Swimwear</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Two-Piece Bikini in Print</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size4" id="xs3" checked>
                    <label class="form-option-label" for="xs3">XS</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size4" id="s3">
                    <label class="form-option-label" for="s3">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size4" id="m3">
                    <label class="form-option-label" for="m3">M</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/08.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Kid's Toys</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Soft Panda Teddy Bear</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$14.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
        </div>
        <!-- Banners-->
        <!-- Products grid-->
        <div class="row mx-n2">
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/09.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Cosmetics</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Metallic Lipstick (Crimson)</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color3" id="crimson" checked>
                    <label class="form-option-label rounded-circle" for="crimson"><span class="form-option-color rounded-circle" style="background-color: #bd3c82;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color3" id="creamy">
                    <label class="form-option-label rounded-circle" for="creamy"><span class="form-option-color rounded-circle" style="background-color: #ebae81;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color3" id="palm">
                    <label class="form-option-label rounded-circle" for="palm"><span class="form-option-color rounded-circle" style="background-color: #ca8799;"></span></label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/10.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Accessories</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">5-Pack Multicolor Bracelets</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/11.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Sandals</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Soft Footbed Sandals</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color4" id="blue2" checked>
                    <label class="form-option-label rounded-circle" for="blue2"><span class="form-option-color rounded-circle" style="background-color: #879fb3;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color4" id="brown">
                    <label class="form-option-label rounded-circle" for="brown"><span class="form-option-color rounded-circle" style="background-color: #9c6d4a;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color4" id="black">
                    <label class="form-option-label rounded-circle" for="black"><span class="form-option-color rounded-circle" style="background-color: #333333;"></span></label>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <select class="form-select form-select-sm me-2">
                    <option>9.5</option>
                    <option>10</option>
                    <option>10.5</option>
                    <option>11</option>
                    <option>11.5</option>
                  </select>
                  <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                </div>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/12.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Hats</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size5" id="s4" checked>
                    <label class="form-option-label" for="s4">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size5" id="m4">
                    <label class="form-option-label" for="m4">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size5" id="l4">
                    <label class="form-option-label" for="l4">L</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card"><span class="badge bg-danger badge-shadow">Sale</span>
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/13.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s T-shirts</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$11.<small>50</small></span>
                    <del class="fs-sm text-muted">$13.<small>50</small></del>
                  </div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size6" id="s5">
                    <label class="form-option-label" for="s5">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size6" id="m5">
                    <label class="form-option-label" for="m5">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size6" id="l5" checked>
                    <label class="form-option-label" for="l5">L</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size6" id="xl5">
                    <label class="form-option-label" for="xl5">XL</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/14.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Jeans</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Slim Taper Fit Jeans</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$58.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size7" id="s6">
                    <label class="form-option-label" for="s6">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size7" id="m6">
                    <label class="form-option-label" for="m6">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size7" id="l6" checked>
                    <label class="form-option-label" for="l6">L</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size7" id="xl6">
                    <label class="form-option-label" for="xl6">XL</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/15.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Waistcoats</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Single-breasted Trenchcoat</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$79.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size8" id="m7">
                    <label class="form-option-label" for="m7">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size8" id="l7" checked>
                    <label class="form-option-label" for="l7">L</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size8" id="xl7">
                    <label class="form-option-label" for="xl7">XL</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/16.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sports Hooded Sweatshirt</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$25.<small>00</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size9" id="s8">
                    <label class="form-option-label" for="s8">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size9" id="m8" checked>
                    <label class="form-option-label" for="m8">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size9" id="l8">
                    <label class="form-option-label" for="l8">L</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size9" id="xl8">
                    <label class="form-option-label" for="xl8">XL</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
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