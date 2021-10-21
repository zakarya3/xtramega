@extends('layouts.header')
      <!-- Hero (Banners + Slider)-->
      @section('content')
            <!-- Page Title (Light)-->
            <div class="bg-secondary py-4">
                <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
                  <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Contacts</li>
                      </ol>
                    </nav>
                  </div>
                  <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 mb-0">Contacts</h1>
                  </div>
                </div>
              </div>
              <!-- Contact detail cards-->
              <section class="container-fluid pt-grid-gutter">
                <div class="row">
                  <div class="col-xl-3 col-sm-6 mb-grid-gutter"><a class="card h-100" href="#map" data-scroll>
                      <div class="card-body text-center"><i class="ci-location h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h6 mb-2">Adresse du magasin principal</h3>
                        <p class="fs-sm text-muted">N°58 Rur Iligh quartier Essalam En face E.N.C.G, Agadir 80000</p>
                        <div class="fs-sm text-primary">Click to see map<i class="ci-arrow-right align-middle ms-1"></i></div>
                      </div></a></div>
                  <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                    <div class="card h-100">
                      <div class="card-body text-center"><i class="ci-time h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h6 mb-3">Heures d'ouverture</h3>
                        <ul class="list-unstyled fs-sm text-muted mb-0">
                          <li>Mon-Sta: 8:30AM–12PM, 2:30–9PM</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                    <div class="card h-100">
                      <div class="card-body text-center"><i class="ci-phone h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h6 mb-3">Les numéros de téléphone</h3>
                        <ul class="list-unstyled fs-sm mb-0">
                          <li><a class="nav-link-style" href="tel:+212663088077">+212663088077</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                    <div class="card h-100">
                      <div class="card-body text-center"><i class="ci-mail h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h6 mb-3">Adresse email</h3>
                        <ul class="list-unstyled fs-sm mb-0">
                          <li><a class="nav-link-style" href="mailto:+108044357260">contact@xtramega.ma</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- Outlet stores-->
              <!-- Split section: Map + Contact form-->
              <div class="container-fluid px-0" id="map">
                <div class="row g-0">
                  <div class="col-lg-6 iframe-full-height-wrap">
                    <iframe class="iframe-full-height" width="600" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.1963462195986!2d-9.55626518503292!3d30.402170681753592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b7fe62a38db9%3A0xdb11416466d55486!2sXTRAMEGA!5e0!3m2!1sen!2sma!4v1634834756398!5m2!1sen!2sma"></iframe>
                  </div>
                  <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
                    <h2 class="h4 mb-4">Écrivez-nous</h2>
                    <form class="needs-validation mb-3" novalidate>
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label class="form-label" for="cf-name">Votre nom:&nbsp;<span class="text-danger">*</span></label>
                          <input class="form-control" type="text" id="cf-name" required>
                          <div class="invalid-feedback">Please fill in you name!</div>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="cf-email">Adresse email:&nbsp;<span class="text-danger">*</span></label>
                          <input class="form-control" type="email" id="cf-email" required>
                          <div class="invalid-feedback">Please provide valid email address!</div>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="cf-phone">Téléphone:&nbsp;<span class="text-danger">*</span></label>
                          <input class="form-control" type="text" id="cf-phone" required>
                          <div class="invalid-feedback">Please provide valid phone number!</div>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="cf-subject">Sujet:</label>
                          <input class="form-control" type="text" id="cf-subject">
                        </div>
                        <div class="col-12">
                          <label class="form-label" for="cf-message">Message:&nbsp;<span class="text-danger">*</span></label>
                          <textarea class="form-control" id="cf-message" rows="6" required></textarea>
                          <div class="invalid-feedback">Please write a message!</div>
                          <button class="btn btn-primary mt-4" type="submit">Envoyer</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </main>
      @endsection