@extends('layouts.safetyapp')
@section('title', 'Home Page')
@section('body')
    <!-- Banner part start -->
    @include('safety_components.banner-part')
    <!-- Banner part end -->

    <!-- Explore part start -->
    <section class="explore-part py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-8 text-center">
                    <h2>Our Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas libero neque at mauris tempus</p>
                </div>
            </div>

            <div class="row py-4 explore-course">
                @forelse ($products as $item)
                    <div class="col-sm-6 col-md-3 mx-3 text-center slider-item">
                        <div class="content">
                            <div class="image-design">
                                <div class="image">
                                    <img class="w-100" src="{{ $item->urlOf('image') }}" alt="Product image">
                                </div>
                                <div class="image-overlay">
                                    <div class="buttons">
                                        <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                        <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('product.details', $item->slug) }}">
                                <h4>{{ $item->name }}</h4>
                            </a>
                            <h5>SAR {{ $item->sell_price }}.00</h5>                    
                        </div>
                    </div>
                @empty
                    <h6>Nothing to show any explore products</h6>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Explore part end -->

    <!-- about part start -->
    <section class="about-part py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <img src="assets/img/photos/about-us.png" alt="">
                </div>
                <div class="col-md-6 mt-4 mt-md-0 align-self-center">
                    <div class="content">
                        <h2>Who We Are?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida ultricies vel aliquet sit condimentum lacus,
                        consectetur mi elementum. Orci aliquam id malesuada orci augue ut morbi. Orci, morbi amet mauris tellus lobortis nulla
                        magna vitae commodo. Id augue magnis morbi molestie egestas.</p>
                        <a class="custom-btn" href="{{ route('about') }}">About us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end -->

    <!-- Media Centers Start -->
    <section class="media-centers py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <div class="content">
                        <h2>Entertainment Centers</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper tincidunt egestas convallis aliquet. Mi diam
                        ullamcorper non morbi eleifend sed. Magna dictum auctor ut ultrices turpis nunc. Enim, mauris ullamcorper pharetra,
                        commodo phasellus odio amet. Pellentesque neque mauris est amet semper suspendisse ipsum enim sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Media Centers end -->

    <div id="inner-media" class="management-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8">
                    <div class="full-contents p-3 p-sm-5">
                        <h4>Managing Media Centers And Social Responsibility</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <p>
                                        <img src="assets/img/icon/tik-icon.png" alt="Success icon">
                                        Managing media centers and documenting coverage of events and events and publishing them in local and international media in all languages
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content">
                                    <p>
                                        <img src="assets/img/icon/tik-icon.png" alt="Success icon">
                                        Managing media centers and documenting coverage of events and events and publishing them in local and international media in all languages
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content">
                                    <p>
                                        <img src="assets/img/icon/tik-icon.png" alt="Success icon">
                                        Managing media centers and documenting coverage of events and events and publishing them in local and international media in all languages
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="{{ route('media.center') }}" class="custom-btn">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Events part start -->
    <section class="events-part py-5 mt-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="content">
                        <h2>Entertainment Events</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim cursus eget facilisi nam nibh. Ornare tellus ac ut mattis
                        nisi at metus, eu. Morbi ac bibendum purus egestas. Blandit urna quam nisl duis nec purus. Scelerisque nunc, amet
                        faucibus lectus pharetra. Ullamcorper neque aliquam velit, tempus pulvinar erat tincidunt adipiscing.</p>
                        <a class="mt-4 custom-btn" href="{{ route('media.center') }}">Read more</a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="{{ asset('assets/img/photos/event-1.png') }}" alt="Event image">
                </div>
            </div>
        </div>
    </section>
    <!-- Events part end -->

    <!-- Explore part start -->
    <section class="explore-part py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-8 text-center">
                    <h2>Explore New Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas libero neque at mauris tempus dictum eu tincidunt
                    laoreet. Quam aliquam ultrices eu turpis. Mauris consectetur turpis aliquam massa id donec viverra phasellus eu.</p>
                </div>
            </div>

            <div class="row py-4 explore-course">
                @forelse ($products as $item)
                    <div class="col-sm-6 col-md-3 mx-3 text-center slider-item">
                        <div class="content">
                            <div class="image-design">
                                <div class="image">
                                    <img class="w-100" src="{{ $item->urlOf('image') }}" alt="Product image">
                                </div>
                                <div class="image-overlay">
                                    <div class="buttons">
                                        <button class="me-2"><img src="assets/img/icon/cart.png" alt="cart"></button>
                                        <button><img src="assets/img/icon/favourite.png" alt="favourite"></button>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('product.details', $item->slug) }}">
                                <h4>{{ $item->name }}</h4>
                            </a>
                            <h5>SAR {{ $item->sell_price }}.00</h5>                    
                        </div>
                    </div>
                @empty
                    <h6>Nothing to show any explore products</h6>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Explore part end -->

    <!-- Training part start -->
    <section class="training-part py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/photos/training-1.png" alt="Training image">
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="content">
                        <h2>Choose the perfect gift from a wide variety of toys.</h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et congue nec sed egestas porttitor sit metus. Consequat sit
                        eget nisl nulla gravida nibh quis dui sed. Fermentum vitae vitae tristique donec in. Facilisi nunc arcu duis phasellus
                        dui non tempor.</p>
                        <a class="custom-btn" href="">Book now</a>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-md-4">
                <div class="col-md-6 align-self-center">
                    <div class="content">
                        <h2>Fun gift wrapping</h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo, volutpat dui leo tempor pretium nisl, ac blandit. Nec
                        etiam at feugiat tincidunt. Sed enim id tincidunt placerat amet gravida. Phasellus diam ac ipsum amet sit dictum.
                        Viverra varius quis sapien posuere aliquam quam lacus.</p>
                        <a class="custom-btn" href="">Read more</a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="assets/img/photos/training-2.png" alt="Training image">
                </div>
            </div>
        </div>
    </section>
    <!-- Training part end -->

    <section class="download-app my-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/photos/download-img.png" alt="Training image">
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="content text-center">
                        <h2>The Entertainment App
                        Get it now.</h2>
                        <div class="btn">
                            <a class="custom-btn" href="#">
                                <img src="assets/img/photos/app-store.png" alt="">
                                App store
                            </a>
                            <a class="custom-btn ms-3" href="#">
                                <img src="assets/img/photos/google-play.png" alt="">
                                google play
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- First Delivery part Start -->
    <section class="first-delivery-part py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="content text-center">
                        <h5 class="mb-5">Get your toys right away!</h5>
                        <h3>Super-fast delivery,</h3>
                        <h3 class="span">‍under 4 hours.</h3>
                    </div>
                </div>
                <div class="col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="assets/img/photos/delivery-img.png" alt="Training image">
                </div>
            </div>
        </div>
    </section>
    <!-- First Delivery part End -->

    <!-- Business brand start -->
    <section class="business-brand py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="mb-0">Our Business Brand</h2>
                    <div class="small-line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="assets/img/partners/1.png" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="assets/img/partners/2.png" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="assets/img/partners/3.png" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="assets/img/partners/4.png" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="assets/img/partners/5.png" alt="Partners">
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="assets/img/partners/6.png" alt="Partners">
                </div>
            </div>
        </div>
    </section>
    <!-- Business brand end -->
@endsection

