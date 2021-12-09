<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/dashboard">
        <img src="img/logoXtra.jpeg" class="navbar-brand-img h-100" alt="main_logo">
        {{-- <span class="ms-1 font-weight-bold text-white">XTRAMEGA</span> --}}
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('dashboard') ? 'active':'' }} bg-gradient-primary" href="/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('categories') ? 'active':'' }} " href="{{ url('categories') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('add-category') ? 'active':'' }} " href="{{ url('add-category') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Ajouter une categorie</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('types') ? 'active':'' }} " href="{{ url('types') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Types</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('add-type') ? 'active':'' }} " href="{{ url('add-type') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Ajouter un type</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('brands') ? 'active':'' }} " href="{{ url('brands') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">branding_watermark</i>
            </div>
            <span class="nav-link-text ms-1">Brands</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('add-brand') ? 'active':'' }} " href="{{ url('add-brand') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Ajouter une marque</span>
          </a>
        </li>
                <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('products-item') ? 'active':'' }} " href="{{ url('products-item') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">article</i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('add-product') ? 'active':'' }} " href="{{ url('add-product') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Ajouter un produit</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('orders') ? 'active':'' }} " href="{{ url('orders') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">content_paste</i>
            </div>
            <span class="nav-link-text ms-1">Les commandes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('users') ? 'active':'' }} " href="{{ url('users') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Utilisateurs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">{{ __('Logout') }}</span>
          </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
      </ul>
    </div>
  </aside>