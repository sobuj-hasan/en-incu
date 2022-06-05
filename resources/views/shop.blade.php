@extends('layouts.safetyapp')
@section('title', 'Shop Page')
@section('body')
    <!-- Banner part start -->
    @include('safety_components.banner-part')
    <!-- Banner part end -->

    <!-- Shop Part start -->
    <section class="shop-part py-5">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <ul class="category-bg">
                        <li class="top-bg">
                            <span>Category</span>
                        </li>
                        @forelse ($category as $item)
                            <li class="mt-2 with-arrow">
                                <span>{{ $item->name }}</span>
                                {{-- <img class="float-right d-inline-block" src="{{ asset('assets/img/icon/arrow-right.png') }}" alt="right-array"> --}}
                                {{-- <ul class="drop-down">
                                    <li><a href=""> Submenu One </a></li>
                                    <li><a href=""> Submenu Two </a></li>
                                    <li><a href=""> Submenu Three </a></li>
                                </ul> --}}
                            </li>
                        @empty
                            <span class="text-danger">Nothing to show any category!</span>
                        @endforelse
                    </ul>
                </div>
    
                <div class="col-md-8 col-xl-9 mt-5 mt-md-0">
                    <div class="row mb-3">
                        <div class="col-8">
                            <h3 class="section-heading">Top Sale Items</h3>
                        </div>
                        <div class="col-4 text-end pe-4">
                            <button class="arrow-btn shop-top-prv"><span> < </span></button>
                            <button class="arrow-btn shop-top-nxt"><span> > </span></button>
                        </div>
                    </div>
                    <div class="product-autoplay-1">
                        @forelse ($products as $item)
                            <div class="slider-item">
                                <div class="image-design">
                                    <div class="product-img image">
                                        <img class="w-100" src="{{ $item->urlOf('image') }}" alt="Product image">
                                    </div>
                                    <div class="image-overlay">
                                        <div class="buttons">
                                            <button class="me-2"><img src="{{ asset('assets/img/icon/cart.png') }}" alt="cart"></button>
                                            <button><img src="{{ asset('assets/img/icon/favourite.png') }}" alt="favourite"></button>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <h4>{{ $item->name }}</h4>
                                </a>
                                <h5>SAR {{ $item->sell_price }}</h5>
                            </div>
                        @empty
                            <h6 class="text-danger">Nothing to show any products !</h6>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Shop Part end -->

    <!-- New Arrival Part start -->
    <section class="shop-part py-5">
        <div class="container mb-4">
            <div class="row">
    
                <div class="col-md-3 col-xl-2">
                    
                </div>
    
                <div class="col-md-9 col-xl-10 mt-5 mt-md-0">
                    <div class="row mb-3">
                        <div class="col-8">
                            <h3 class="section-heading">New Arrivals</h3>
                        </div>
                        <div class="col-4 text-end pe-4">
                            <button class="arrow-btn prv"><span>
                                    < </span></button>
                            <button class="arrow-btn nxt"><span> > </span></button>
                        </div>
                    </div>
                    <div class="product-autoplay-2">
                        @forelse ($new_arrivals as $item)
                            <div class="slider-item">
                                <div class="image-design">
                                    <div class="product-img image">
                                        <img class="w-100" src="{{ $item->urlOf('image') }}" alt="Product image">
                                    </div>
                                    <div class="image-overlay">
                                        <div class="buttons">
                                            <button class="me-2"><img src="{{ asset('assets/img/icon/cart.png') }}" alt="cart"></button>
                                            <button><img src="{{ asset('assets/img/icon/favourite.png') }}" alt="favourite"></button>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <h4>{{ $item->name }}</h4>
                                </a>
                                <h5>SAR {{ $item->sell_price }}</h5>
                            </div>
                        @empty
                            <h6 class="text-danger">Nohting to show any prodicts !</h6>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrival Part end -->
@endsection
