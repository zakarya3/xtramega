<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from cartzilla.createx.studio/home-electronics-store.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 10:29:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Xtramega | Electronics Store</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/css/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="/css/tiny-slider.css"/>
    <link rel="stylesheet" media="screen" href="/css/drift-basic.min.css"/>
    <link rel="stylesheet" media="screen" href="/css/lightgallery.min.css"/>
    <link rel="stylesheet" href="/css/main.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="/css/theme.min.css">
    <!-- Google Tag Manager-->
    {{-- <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='/../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <main class="page-wrapper">
      <!-- Navbar Electronics Store-->
      <header class="shadow-sm">
        <!-- Topbar-->
        <div class="topbar topbar-dark bg-dark">
          <div class="container">
            <div>
              <div class="topbar-text text-nowrap d-none d-md-inline-block border-start border-light ps-3 ms-3"><span class="text-muted me-1">Available 24/7 at</span><a class="topbar-link" href="tel:00331697720">+212 661-641220 / 528-239180</a></div>
            </div>
          </div> 
        </div>
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        <div class="navbar-sticky bg-light">
          <div class="navbar navbar-expand-lg navbar-light">
            <div class="container"><a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="/"><img class="logo-pic" src="/img/logoXtra.jpeg" width="250" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2" href="/"><img src="/img/logoXtra.jpeg" width="74" alt="Cartzilla"></a>
              <!-- Search-->
              <div class="input-group d-none d-lg-flex flex-nowrap mx-4"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input class="form-control rounded-start w-100" type="text" placeholder="Rechercher des produits">
                <select class="form-select flex-shrink-0" style="width: 10.5rem;">
                  <option>Toutes catégories</option>
                  @foreach ($category as $cate)
                    <option>{{ $cate->category_name }}</option>
                  @endforeach
                </select>
              </div>
              <!-- Toolbar-->
              <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Toggle menu</span>
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div></a>
                <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" data-bs-toggle="modal">
                  <a href="{{ url('/login') }}"><div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div></a>
                  <a href="{{ url('/login') }}"><div class="navbar-tool-text ms-n3">
                    <small>{{ Session::get('name') }}</small></div></a>
                </a>
                <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{ url('cart') }}"><span class="navbar-tool-label">{{ Cart::getTotalQuantity()}}</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="{{ url('cart') }}"></a>
                  <!-- Cart dropdown-->
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                      <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                        @foreach ($cartItems as $item)
                          <div class="widget-cart-item py-2 border-bottom product_data">
                            <input type="hidden" value="{{ $item->id }}" class="prod_id">
                          <form action="{{ route('cart.remove') }}" method="post">@csrf <input type="hidden" value="{{ $item->id }}" name="id"> <button class="btn-close text-danger" type="submit" aria-label="Remove"><span aria-hidden="true">&times;</span></button></form>
                            <div class="d-flex align-items-center"><a class="d-block flex-shrink-0" href="{{ url('cart') }}"><img src="{{ asset('assets/uploads/products/images/'.$item->attributes->image) }}" width="64" alt="Product"></a>
                              <div class="ps-2">
                                <h6 class="widget-product-title"><a href="{{ url('cart') }}">{{ $item->name }}</a></h6>
                                <div class="widget-product-meta"><span class="text-accent me-2">{{ $item->price }}.<small>00 MAD</small></span><span class="text-muted">x {{ $item->quantity }}</span></div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      </div><a class="btn btn-primary btn-sm d-block w-100" href="{{ url('cart') }}"><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Search-->
                <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input class="form-control rounded-start" type="text" placeholder="Search for products">
                </div>
                <!-- Departments menu-->
                <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2"></ul>
                <!-- Primary menu-->
                <ul class="navbar-nav">
                  <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="{{ url('/') }}">Accueil</a></li>
                  @foreach ($category as $cate)
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url('products/'.$cate->category_name) }}">{{ $cate->category_name }}</a>
                    <ul class="dropdown-menu">
                      @foreach ($cate->type as $item)
                        <li><a class="dropdown-item" href="{{ url('/products/'.$cate->category_name.'/'.$item->name) }}">{{ $item->name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                  @endforeach
                  <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="{{ url('myorders') }}">Mes commandes</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      @yield('content')
      <footer class="footer bg-dark pt-5">
        <div class="container">
          <div class="row pb-2">
            <div class="col-md-4 col-sm-6">
              <div class="widget widget-links widget-light pb-2 mb-4">
                <h3 class="widget-title text-light">Informations</h3>
                <ul class="widget-list">
                  <li class="widget-list-item"><i class="fas fa-map-marker-alt"></i> <span style="color: rgba(255,255,255,.65); font-size: .875rem;">Adresse:Hay El Wafa, Rue 701 N°24 Agadir Maroc</span></li>
                  <li class="widget-list-item"><i class="fas fa-envelope"></i> <span style="color: rgba(255,255,255,.65); font-size: .875rem;">contact@xtramega.ma </span></li>
                  <li class="widget-list-item"><i class="fas fa-phone-alt"></i> <span style="color: rgba(255,255,255,.65); font-size: .875rem;"><a href="tel:+212 66308877" style="color: rgba(255,255,255,.65)">+212 66308877</a></span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="widget widget-links widget-light pb-2 mb-4">
                <h3 class="widget-title text-light">Notre Compagnie</h3>
                <ul class="widget-list">
                  <li class="widget-list-item"><a class="widget-list-link" href="#">Qui Sommes-Nous ?</a></li>
                  <li class="widget-list-item"><a class="widget-list-link" href="{{ url('contact') }}">Contactez-nous</a></li>
                  <li class="widget-list-item"><a class="widget-list-link" href="{{ url('brand') }}">Nos Marques</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget pb-2 mb-4">
                <h3 class="widget-title text-light pb-1">Newsletter</h3>
                <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                  <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                    <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                  </div>
                  <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                  <div class="subscription-status"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-5 bg-darker">
          <div class="container">
            <div class="row pb-2">
              <div class="col-md-6 text-center text-md-end mb-4">
                <div class="mb-3 social"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a></div>
              </div>
            </div>
            <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
          </div>
        </div>
      </footer>
      <!-- Toolbar for handheld devices (Default)-->
      <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="{{ url('cart') }}"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
      </div>
      <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
      <!-- Vendor scrits: js libraries and plugins-->
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="/js/simplebar.min.js"></script>
      <script src="/js/tiny-slider.js"></script>
      <script src="/js/smooth-scroll.polyfills.min.js"></script>
      <script src="/js/Drift.min.js"></script>
      <script src="/js/lightgallery.min.js"></script>
      <script src="/js/lg-video.min.js"></script>
      <!-- Main theme script-->
      <script src="/js/theme.min.js"></script>
      <script src="/js/custom.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      @if (session('status'))
          <script>
              swal("{{ session('status') }}");
          </script>
      @endif
    </body>

    <!-- Mirrored from cartzilla.createx.studio/home-electronics-store.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 10:30:42 GMT -->
    </html>