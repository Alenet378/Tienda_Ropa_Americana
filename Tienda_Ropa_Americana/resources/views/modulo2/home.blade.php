
@extends('layouts.master')

@section('title', 'Inicio | Lorenas Boutique')

@section('contenido')

    <!-- / Top banner -->
        <section class="vh-75 vh-lg-60 container-fluid rounded overflow-hidden" data-aos="fade-in">
            <!-- Swiper Info -->
            <div class="swiper-container overflow-hidden rounded h-100 bg-light" data-swiper data-options='{
              "spaceBetween": 0,
              "slidesPerView": 1,
              "effect": "fade",
              "speed": 1000,
              "loop": true,
              "parallax": true,
              "observer": true,
              "observeParents": true,
              "lazy": {
                "loadPrevNext": true
                },
                "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
                }
              }'>
              <div class="swiper-wrapper">
            
                <!-- Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url('{{ asset('theme/assets/images/banners/Banner1.jpg') }}')">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-black opacity-75 mb-0" data-swiper-parallax="-100">Todo lo que quieres</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-black" data-swiper-parallax="100">
                      <span class="text-outline-dark">PROXIMO DROP</span> SEMANAL</h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="./category.html" class="btn btn-psuedo text-black" role="button">Nuevas prendas unicas en camino</a>
                    </div>
                    <div class="d-flex justify-content-center gap-3 text-dark"
                     id="countdown">

                    <div>
                        <h2 id="dias">00</h2>
                        <small>DÍAS</small>
                    </div>

                    <div>
                        <h2 id="horas">00</h2>
                        <small>HORAS</small>
                    </div>

                    <div>
                        <h2 id="minutos">00</h2>
                        <small>MIN</small>
                    </div>

                    <div>
                        <h2 id="segundos">00</h2>
                        <small>SEG</small>
                    </div>

                </div>
                  </div>
                </div>
                <!-- /Slide-->

                <!-- Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url('{{ asset('theme/assets/images/banners/Banner2.png') }}')">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-black opacity-75 mb-0" data-swiper-parallax="-100">Te estan esperando</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-black" data-swiper-parallax="100">
                      <span class="text-outline-dark">PROXIMO DROP</span> SEMANAL</h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="./category.html" class="btn btn-psuedo text-black" role="button">Nuevas Prendas Unicas En Camino</a>
                    </div>
                    <div class="d-flex justify-content-center gap-3"
                     id="countdown">

                    <div>
                        <h2 id="dias">00</h2>
                        <small>DÍAS</small>
                    </div>

                    <div>
                        <h2 id="horas">00</h2>
                        <small>HORAS</small>
                    </div>

                    <div>
                        <h2 id="minutos">00</h2>
                        <small>MIN</small>
                    </div>

                    <div>
                        <h2 id="segundos">00</h2>
                        <small>SEG</small>
                    </div>

                </div>
                  </div>
                </div>
                <!-- /Slide-->
            
            
              </div>
            
              <div class="swiper-pagination swiper-pagination-bullet-light"></div>
            
            </div>
            <!-- / Swiper Info-->        </section>
        <!--/ Top Banner-->




        <!-- Sugerencias -->

    
    <!-- Buscador -->
    <section class="container py-4">

        <div class="text-center mb-4">
            <h2 class="fw-bold">Encuentra tu próximo estilo</h2>
            <p class="text-muted">
                Busca entre nuestras piezas únicas.
            </p>
        </div>

        <form action="{{ url('/catalogo') }}" method="GET">
            <div class="input-group input-group-lg">

                <input type="search"
                       name="buscar"
                       class="form-control"
                       placeholder="Buscar prendas, marcas o categorías...">

                <button class="btn btn-dark" type="submit">
                    <i class="ri-search-line"></i> Buscar
                </button>

            </div>
        </form>

    </section>

    <!-- Carrusel de marcas -->
    <!-- Aquí trasladaremos el carrusel existente de master.blade.php -->
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


@endsection
