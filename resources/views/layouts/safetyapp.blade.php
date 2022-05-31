@php
    $locale = app()->getLocale();
@endphp
<!DOCTYPE html>
@if ($locale == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="auto">
@endif

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title-->
    <title>Home Page | Entertainment Incubators</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/img/') }}" type="image/gif">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!--    font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!--    boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Toaster Bootstrap cdn --><!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/arabic.css"> -->
</head>

<body>
    <section class="header-top">
        <div class="container">
            <div class="row d-flex flex-wrap">
                <div class="col">
                    <div class="menubar clearfix">
                        <ul>
                            <li>
                                <span>Follow us: </span>
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
                            <li class="me-4">
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </li>
                            <li class="nav-item me-4">
                                <a href="#">
                                    Arabic
                                    <img src="{{ asset('assets/img/photos/language.png') }}" alt="lang">
                                </a>
                            </li>
                            
                            @if (Auth::guest())
                                <li class="nav-item me-4">
                                    <a href="{{ route('register') }}">Sign Up</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a href="{{ route('login') }}">Sign In</a>
                                </li>
                            @else
                                <li class="nav-item me-4">
                                    @if (Auth::user()->role)
                                        <a href="{{ route('admin.index') }}">
                                            Admin Panel 
                                            <img style="border: 1px solid #a6adce;" width="35px" height="35px" class="rounded-circle" src="{{ asset('assets/img/users/default.png') }}" alt="">
                                        </a>
                                    @else
                                        <a href="{{ route('dashboard.index') }}">
                                            My Account 
                                            <img style="border: 1px solid #a6adce;" width="35px" height="35px" class="rounded-circle" src="{{ asset('assets/img/users/default.png') }}" alt="">
                                        </a>
                                    @endif
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    header-->
    <header>
        <!-- mobile menu -->
        <div id="mobile-menu" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a href="#">
                    <i style="font-size: 25px; color: #4A148C; position: relative;" class="fa fa-cart-plus"></i>
                    <sup style="position: absolute; left: 15px; top: -5px;" class="badge bg-warning carts ms-1 rounded-circle text-success text-white" id="cart_counter">0</sup>
                </a>
                <a href="{{ route('index') }}">Home</a>
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('shop') }}">Shop</a>
                <a href="{{ route('administration') }}">Administration</a>
                <a href="{{ route('media.center') }}">Media Center</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
        <!-- end mobile menu -->
        <div class="container py-2">
            <div class="row align-items-center">
                <div class="col-lg-3 clearfix">
                    <div class="logo d-flex justify-content-between align-items-center">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                        </a>
                        <i onclick="openNav()" class="fa fa-bars d-lg-none"></i>
                    </div>
                </div>
                <div class="col-9 d-none d-lg-block">
                    <div class="menubar clearfix">
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('shop') }}">Shop</a>
                            </li>
                            <li>
                                <a href="{{ route('administration') }}">Administration</a>
                            </li>
                            <li>
                                <a href="{{ route('media.center') }}">Media Center</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li data-aos="fade-left" data-aos-delay="800" class="aos-init aos-animate">
                                <a href="#">
                                    <i style="font-size: 25px; color: #4A148C; position: relative;" class="fa fa-cart-plus"></i>
                                    <sup style="position: absolute; left: 15px; top: -5px;" class="badge bg-warning carts ms-1 rounded-circle text-success text-white" id="cart_counter">0</sup>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--    header end-->

    @yield('body')

    <!-- Footer top -->
    <section id="footer-top" class="py-5 m">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="footer-content-2">
                        <h5 class="text-uppercase">My Account</h5>
                        <ul class="content">
                            <li>
                                <a href="{{ route('login') }}">My Account</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Site Map</a>
                            </li>
                            <li>
                                <a href="{{ route('shop') }}">Our Shop</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-content-2 info">
                        <h5 class="text-uppercase">Information</h5>
                        <ul class="content">
                            <li>
                                <a href="#">+9960551175959 </a>
                            </li>
                            <li>
                                <a href="#">Info@entertainmentincu.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="footer-content-2">
                        <h5 class="text-uppercase">Support link</h5>
                        <ul class="content">
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('administration') }}">Administration</a>
                            </li>
                            <li>
                                <a href="{{ route('media.center') }}">Media Center</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 text-center subscribe align-self-center">
                    <h2>Join with us</h2>
                    <p>Subscribe to receive updates, access to exclusive deals, and more</p>
                    <form method="GET" action="{{ route('subscribe') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" required>
                            <button class="btn text-uppercase" type="submit">subscribes</button>
                        </div>
                        @error('email')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </form>

                    <div class="menubar clearfix">
                        <ul>
                            <li>
                                <span>Follow us: </span>
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
        </div>
    </section>
    <!-- Footer top end -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row py-4">
                <div class="col-12 text-center">
                    <p class="mb-0">@copyright-2022. All right reserved entertainment incubator</p>
                </div>
            </div>
        </div>
    </footer>

    <!--    jquery google host-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--    boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
    <!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Toastr Scripts render -->
    {!! Notify::message() !!}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
            toastr.error(`{!! $error !!}`, 'Error')
        </script>
        @endforeach
    @endif

    <!-----for Ajax handeling----->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    {{-- Product add to cart use Ajax --}}
    <script>
        $(document).ready(function(){
            showcartcount();
             showcartsummary();
              showcartcontent();
        });

        function showcartcount(){
            $.ajax({
                url: "{{ route('cart.count') }}",
                success: function(data) {
                    $('.shoppingcartshow').html(data);
                }
            });
        }

        function showcartcontent(){
            $.ajax({
                url: "{{ route('cart.content') }}",
                success: function(data) {
                    $('#cartcontentshow').html(data);
                }
            });
        }

        function showcartsummary(){
            $.ajax({
                url: "{{ route('cart.summary') }}",
                success: function(data) {
                    $('#cartsummaryshow').html(data);
                }
            });
        }

        // Product add to cart uses ajax request
        // $('.product_id').on('click',function(e){
        //     e.preventDefault();
        //     var product_id = $(this).data('id');

        //       var url = "{{ route('add_to_cart') }}";

        //     $.ajax({
        //         type: "post",
        //         url: url,
        //         data: {
        //             product_id: product_id
        //         },
        //         success: function(data){
        //             showcartcount();
        //             showcartcontent();
        //             showcartsummary();
        //             if ($.isEmptyObject(data.error)) {
        //                 toastr.success(data.success, 'Product successfully add to Cart', {
        //                     timeOut: 3000
        //                 });
        //             } else {
        //                 toastr.error(data.error, {
        //                     timeOut: 3000
        //                 });
        //             }
        //         },
        //         error: function(data) {
        //             console.log('Error:', data);
        //         }
        //     });
        // });

        // Product add to cart from details page
        $('#detail_product_id').on('click',function(e){
            e.preventDefault();

            var product_id = $(this).data('id');
            var quantity = $('#quantity').val();
            
            var url = "{{ route('details_add_to_cart') }}";
            $.ajax({
                type: "post",
                url: url,
                data: {
                    product_id: product_id,
                    quantity: quantity,
                },
                success: function(data){
                    showcartcount();
                    if ($.isEmptyObject(data.error)) {
                        toastr.success(data.success, 'Product successfully add to Cart', {
                            timeOut: 3000
                        });
                    } else {
                        toastr.error(data.error, {
                            timeOut: 3000
                        });
                    }
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            }); 
        });
    </script>

    <script>
        $('.banner-autoplay').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            rtl: false,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            nextArrow: $('#course-next'),
            prevArrow: $('#course-previous'),
            responsive: [{
                breakpoint: 1300,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

            ]
        });
    </script>

</body>

</html>



