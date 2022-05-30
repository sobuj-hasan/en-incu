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
                        <h3>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id accumsan in facilisis justo, nisl non. Nulla sit at
                        vulputate nisi parturient eget eget porta.</p>
                        <h3 class="d-inline-block">$22.54</h3>
                        <h5 class="d-inline-block ps-3">$22.54</h5> <br>

                        
                        <div class="quantity d-inline-block mt-3">
                            <div class="input-group">
                                <input type="number" value="01" id="quantity">
                                <div class="arrows">
                                    <div class="up-arrow" onclick="increaseValue()">
                                        <img src="assets/img/icon/up-arrow.png" alt="">
                                    </div>
                                    <div class="line"></div>
                                    <div class="down-arrow" onclick="decreaseValue()">
                                        <img src="assets/img/icon/down-arrow.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="buttons ps-sm-2 d-inline-block">
                            <button class="custom-btn mt-3">Add to Cart</button>
                            <button class="custom-outline-btn mt-3 ms-sm-2">Save to love</button>
                        </div>

                        <p class="mb-0 mt-4"><strong class="text-dark">Tags:</strong> Entertainment, Toys, Popular</p>
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
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                        </div>
                        <div id="tab2" class="single-tab-content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                        </div>
                    
                        <div id="tab3" class="single-tab-content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majorielievable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
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
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/11.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/12.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/13.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/14.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/15.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/16.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/11.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/12.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/13.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/14.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/15.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
                <div class="slider-item">
                    <div class="image-design">
                        <div class="product-img image">
                            <img src="assets/img/products/16.png" alt="Product image">
                        </div>
                        <div class="image-overlay">
                            <div class="buttons">
                                <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Product Name Here</h4>
                    <h5>$22.54</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Part end -->
@endsection



