<!doctype html>
<html lang="en">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('theme/assets/images/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('theme/assets/images/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/assets/images/favicon/favicon-16x16.png') }}">
  <link rel="mask-icon" href="{{ asset('theme/assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">

  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="{{ asset('theme/assets/css/libs.bundle.css') }}" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('theme/assets/css/theme.bundle.css') }}" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Lorenas Boutique</title>

</head>
<body class="">

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
        <div class="container-fluid">
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
    
                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./index.html">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('Lorenas.png') }}" alt="Logo lorenas" class="img-fluid" style="height: 75px; width: auto; object-fit: contain;">
                        </div>
                    </a>
                    <!-- / Logo-->
    
                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">
    
                        <!-- Mobile Nav Toggler-->
                        <li class="d-lg-none">
                            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
                        </li>
                        <!-- /Mobile Nav Toggler-->
    
                        <!-- Navbar Search-->
                        <li class="d-none d-sm-block">
                            <span class="nav-link text-body search-trigger cursor-pointer">Buscar</span>
    
                            <!-- Search navbar overlay-->
                            <div class="navbar-search d-none">
                                <div class="input-group mb-3 h-100">
                                    <span class="input-group-text px-4 bg-transparent border-0"><i
                                            class="ri-search-line ri-lg"></i></span>
                                    <input type="text" class="form-control text-body bg-transparent border-0"
                                        placeholder="Enter your search terms...">
                                    <span
                                        class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i
                                            class="ri-close-circle-line ri-lg"></i></span>
                                </div>
                            </div>
                            <div class="search-overlay"></div>
                            <!-- / Search navbar overlay-->
    
                        </li>
                        <!-- /Navbar Search-->
    
                        <!-- Navbar Login-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" href="./login.html">
                                Cuenta
                            </a>
                        </li>
                        <!-- /Navbar Login-->
    
                        <!-- Navbar Cart Icon-->
                        <li class="ms-1 d-inline-block position-relative dropdown-cart">
                            <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body"
                                type="button">
                                Carrito (2)
                            </button>
                            <div class="cart-dropdown dropdown-menu">
                            
                                <!-- Cart Header-->
                                <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                    <h6 class="fw-bolder m-0">Resumen del carrito</h6>
                                    <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                                </div>
                                <!-- / Cart Header-->
                            
                                <!-- Cart Items-->
                                <div>
                                    <!-- Item dinamicos agregados al carrito -->
                                </div>
                                <!-- /Cart Items-->
                            
                                <!-- Cart Summary-->
                                <div>
                                    <div class="pt-3">
                                        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                            <div>
                                                <p class="m-0 fw-bold fs-5">Total</p>
                                                <span class="text-muted small">Impuestos incluidos de L00<!-- Impuestos incluidos en HNL --></span>
                                            </div>
                                            <p class="m-0 fs-5 fw-bold">L.00<!-- Total de el carrito en HNL --></p>
                                        </div>
                                    </div>
                                    <a href="./cart.html" class="btn btn-outline-dark w-100 text-center mt-4" role="button">Ver Carrito</a>
                                    <a href="./checkout.html" class="btn btn-dark w-100 text-center mt-2" role="button">Proceder a comprar</a>
                                </div>
                                <!-- / Cart Summary-->
                              </div>
                            
    
                        </li>
                        <!-- /Navbar Cart Icon-->
    
                    </ul>
                    <!-- Navbar Icons-->                
    
                    <!-- Main Navigation-->
                    <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
                        id="navbarNavDropdown">
    
                        <!-- Menu-->
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="./category.html" role="button">
                                  Lo más Nuevo...
                                </a>
                              </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Categorias
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="./category.html">Ropa de temporada</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Marcas Mundiales</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Ropa de oficina</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Accesorios</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Zapatos</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="./category.html" role="button">
                                  Caballeros
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="./category.html" role="button">
                                  Ofertas
                                </a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Paginas
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="./index.html">Inicio</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Categorias</a></li>
                                  <li><a class="dropdown-item" href="./product.html">Productos</a></li>
                                  <li><a class="dropdown-item" href="./cart.html">Carrrito</a></li>
                                  <li><a class="dropdown-item" href="./checkout.html">Pagos</a></li>
                                  <li><a class="dropdown-item" href="./login.html">Iniciar Sesion</a></li>
                                  <li><a class="dropdown-item" href="./register.html">Registrarme</a></li>
                                  <li><a class="dropdown-item" href="./forgotten-password.html">¿Olvidaste tu constraseña?</a></li>
                                </ul>
                              </li>
                          </ul>                    <!-- / Menu-->
    
                    </div>
                    <!-- / Main Navigation-->
    
                </div>
            </div>
        </div>
    </nav>
    <!-- / Navbar-->    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 overflow-hidden ">
        <!-- Page Content Goes Here -->

        <!-- Featured Brands-->
        <div class="brand-section container-fluid" data-aos="fade-in">
            <div class="bg-overlay-sides-white-to-transparent bg-white py-5 py-md-7">
                <section class="marquee marquee-hover-pause">
                    <div class="marquee-body">
                        <div class="marquee-section animation-marquee-50">
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-1.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-2.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-3.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-4.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-5.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-6.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-7.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-8.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-9.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="marquee-section animation-marquee-50">
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-1.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-2.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-3.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-4.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-5.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-6.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-7.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-8.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('theme/assets/images/logos/logo-9.svg') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!--/ Featured Brands-->

<!-- Contenido dinamico del home -->
        <!-- <div class="container-fluid px-4 mt-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @yield('contenido')
        </div> -->
        @yield('contenido')

        <div class="container-fluid">
            <!-- Instagram-->
            <!-- Swiper Instagram -->
            <div data-aos="fade-in">
              <h3 class="title-small text-muted text-center mb-3 mt-5"><i class="ri-instagram-line align-bottom"></i>
                #OLDSKOOL
            </h3>
            <div class="overflow-hidden">
              <div class="swiper-container swiper-overflow-visible"
                data-swiper
                data-options='{
                    "spaceBetween": 20,
                    "loop": true,
                    "autoplay": {
                      "delay": 5000,
                      "disableOnInteraction": false
                    },
                    "breakpoints": {
                      "400": {
                        "slidesPerView": 2
                      },
                      "600": {
                        "slidesPerView": 3
                      },       
                      "999": {
                        "slidesPerView": 5
                      },
                      "1024": {
                        "slidesPerView": 6
                      }
                    }
                  }'>
                <div class="swiper-wrapper mb-5">
            
                  <!-- Start of instagram slideshow loop for items-->
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1586396874197-b8fc676a5187?ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib&#x3D;rb-1.2.1&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1538329972958-465d6d2144ed?ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib&#x3D;rb-1.2.1&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1503341338985-c0477be52513?ixlib&#x3D;rb-1.2.1&amp;ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1566677914817-56426959ae9c?ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib&#x3D;rb-1.2.1&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1582657233895-0f37a3f150c0?ixlib&#x3D;rb-1.2.1&amp;ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1550246140-5119ae4790b8?ixlib&#x3D;rb-1.2.1&amp;ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1520048480367-7a6a4b6efb2a?ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib&#x3D;rb-1.2.1&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1550246140-29f40b909e5a?ixlib&#x3D;rb-1.2.1&amp;ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <!-- / end of items loop-->
            
                </div>
              </div>
            </div>
            </div>
            <!-- /Swiper Instagram-->
            <!-- / Instagram-->

        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <footer class="border-top py-5 mt-4  ">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <div>
                    <ul class="list-unstyled">
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-instagram-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-facebook-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-twitter-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-snapchat-fill"></i></a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
                    <p class="small m-0 text-center text-lg-start">&copy; 2026 Lorenas Boutique, Todos los derechos reservados.</p>
                    <ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-paypal"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-mastercard"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-american-express"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i
                                class="pi pi-sm pi-visa"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>    <!-- / Footer-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="{{ asset('theme/assets/js/vendor.bundle.js') }}"></script>
    
    <!-- Theme JS -->
    <script src="{{ asset('theme/assets/js/theme.bundle.js') }}"></script>
</body>

</html>