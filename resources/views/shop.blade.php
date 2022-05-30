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
                        <li class="mt-2 with-arrow">
                            <span>Exhibition entertainment <img class="float-right d-inline-block"
                                    src="assets/img/icon/arrow-right.png" alt="asdf"></span>
                            <ul class="drop-down">
                                <li><a href=""> Submenu One </a></li>
                                <li><a href=""> Submenu Two </a></li>
                                <li><a href=""> Submenu Three </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Live entertainment</a>
                        </li>
                        <li>
                            <a href="">Mass media entertainment industry</a>
                        </li>
                        <li>
                            <a href="">Digital Entertainment Industry</a>
                        </li>
                        <li>
                            <a href="">Electronic entertainment</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
                        <li>
                            <a href="">Music industry</a>
                        </li>
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
                        <div class="slider-item">
                            <div class="image-design">
                                <div class="product-img image">
                                    <img src="assets/img/products/5.png" alt="Product image">
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
                                    <img src="assets/img/products/6.png" alt="Product image">
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
                                    <img src="assets/img/products/7.png" alt="Product image">
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
                                    <img src="assets/img/products/8.png" alt="Product image">
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
                                    <img src="assets/img/products/9.png" alt="Product image">
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
                                    <img src="assets/img/products/10.png" alt="Product image">
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
                                    <img src="assets/img/products/17.png" alt="Product image">
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
                                    <img src="assets/img/products/18.png" alt="Product image">
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
                                    <img src="assets/img/products/5.png" alt="Product image">
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
                                    <img src="assets/img/products/6.png" alt="Product image">
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
                                    <img src="assets/img/products/7.png" alt="Product image">
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
                                    <img src="assets/img/products/8.png" alt="Product image">
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
            </div>
        </div>
    </section>
    <!-- New Arrival Part end -->
@endsection
