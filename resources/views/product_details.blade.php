@extends('layouts.safetyapp')
@section('title', 'Product Details')
@section('body')
    <!-- Shop Details Part start -->
    <section class="shop-details-part py-3 py-lg-5">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <p><a href="{{ route('index') }}">Home</a> > <a href="">{{ $product_details->category->name }}</a> > <a href="">{{ $product_details->name }}</a> </p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-5 text-center">
                    <div class="img-bg">
                        <img src="{{ $product_details->urlOf('image') }}" alt="Product image">
                    </div>
                </div>
                <div class="col-md-7 ps-3">
                    <div class="content mt-4 mt-md-0">
                        <h3>{{ $product_details->name }}</h3>
                        <p>{{ Str::limit($product_details->short_description, 285, $end='..') }}</p>
                        <h3 class="d-inline-block">SAR {{ $product_details->price }}</h3>
                        <h5 class="d-inline-block ps-3">SAR {{ $product_details->sell_price }}</h5> <br>
                        <div class="quantity d-inline-block mt-3">
                            <div class="input-group">
                                <input type="number" value="01" id="quantity">
                                <div class="arrows">
                                    <div class="up-arrow" onclick="increaseValue()">
                                        <img src="{{ asset('assets/img/icon/up-arrow.png') }}" alt="">
                                    </div>
                                    <div class="line"></div>
                                    <div class="down-arrow" onclick="decreaseValue()">
                                        <img src="{{ asset('assets/img/icon/down-arrow.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttons ps-sm-2 d-inline-block">
                            <button class="custom-btn mt-3">Add to Cart</button>
                            <button class="custom-outline-btn mt-3 ms-sm-2">Save to love</button>
                        </div>

                        <p class="mb-0 mt-4"><strong class="text-dark">Tags:</strong> {{ $product_details->category->name }}, Entertainment</p>
                        <ul class="social-share">
                            <li class="m-0 mt-1 pe-2">
                                <strong>Share Product: </strong>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix py-5">
                <div class="col-12">
                    <div class="tabs-nav">
                        <ul>
                            <li class="active"><a href="#tab1">Description</a></li>
                            <li><a href="#tab2">Information</a></li>
                            <li><a href="#tab3">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div id="tab1" class="single-tab-content">
                            {!! $product_details->long_description !!}
                        </div>
                        <div id="tab2" class="single-tab-content">
                            <p>Product Information</p>
                        </div>
                    
                        <div id="tab3" class="single-tab-content">
                            <p>Nothin to show review !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Part end -->

    <!-- Related Product Part start -->
    <section class="shop-part py-5">
        <div class="container">
            <div class="row mb-3 mt-5">
                <div class="col-6">
                    <h3 class="section-heading">Related Product</h3>
                </div>
                <div class="col-6 text-end pe-4">
                    <button class="arrow-btn related-prv"><span><</span></button>
                    <button class="arrow-btn related-nxt"><span>></span></button>
                </div>
            </div>
            <div class="autoplay-2">
                @forelse ($related_products as $item)
                    <div class="slider-item">
                        <div class="image-design">
                            <div class="product-img image">
                                <img src="{{ $item->urlOf('image') }}" alt="Product image">
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
                    <h6 class="text-danger">Nothing to show any related Products !</h6>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Related Product Part end -->
@endsection



