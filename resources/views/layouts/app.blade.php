<!doctype html>
    <html class="no-js" lang="vni">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home One</title>
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
        <!-- Font-Awesome css -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="{{asset('css/pe-icon-7-stroke.css')}}">
        <!-- Flaticon css -->
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <!-- venobox css -->
        <link rel="stylesheet" href="{{asset('venobox/venobox.css')}}" type="text/css" media="screen" />
        <!-- nivo slider css -->
        <link rel="stylesheet" href="{{asset('lib/css/nivo-slider.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('lib/css/preview.css')}}" type="text/css" media="screen" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- modernizr css -->
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--Header Area Start-->
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="header-logo">
                            <a href="/">
                                <img src="{{asset($site->content->Logo)}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                        <div class="header-right">
                            <ul>

                                <li>
                                   @if (Route::has('login'))
                                   @auth
                                   <a href="{{ route('index')}}"><i class="flaticon-people"></i></a>
                                   @else
                                   <a href="{{ route('login')}}"><i class="flaticon-people"></i></a>
                                   @if (Route::has('register'))
                                   <a href="{{ route('register') }}"></a>
                                   @endif
                                   @endauth
                                   @endif
                               </li>


                           </ul>
                       </div>
                   </div>                    
                   <div class="col-md-9 col-sm-12 hidden-xs">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">
                                <li><a href="{{route('index')}}">HOME</a></li>
                                <li><a href="{{route('shop.index')}}">FEATURED</a></li>
                                <li><a href="{{route('blog.index')}}">REVIEW BOOK</a></li>
                                <li><a href="{{route('about')}}">ABOUT AUTHOR</a></li>
                                <li><a href="{{route('contact')}}">CONTACT</a>
                                </li>
                                @if(Auth::check())
                                    <li><a href="/logout">Logout</a></li>
                                @else
                                    <li><a href="/login">Login</a></li>
                                @endif
                                
                            </ul>
                        </nav>
                    </div>                        
                </div>
                <div class="col-md-1 hidden-sm">
                    <div class="header-right">
                        <ul>
                            @if (Route::has('login'))
                            <li>
                               @auth
                               <a href="{{ route('profile.index')}}"><i class="flaticon-people"></i></a>
                               @else
                               <a href="{{ route('login')}}"><i class="flaticon-people"></i></a>
                               @if (Route::has('register'))
                               <a href="{{ route('register') }}"></a>
                               @endif
                               @endauth

                           </li>
                           @endif
                           <li class="shoping-cart">
                            <a href="{{route('cart.index')}}">
                                <i class="flaticon-shop"></i>
                                <span>{{Cart::content()->count()}}</span>
                            </a>
                            <div class="add-to-cart-product">
                                @foreach(Cart::content() as $item)
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="{{route('shop.show',$item->id)}}">
                                            <img src="{{asset($item->options->image)}}" alt="" style="display:block; width: 75px; height: 75px;">
                                            <img style="position: absolute;
                                            margin: auto;
                                            top: 0;
                                            left: 0;
                                            right: 0;
                                            bottom: 0;">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>{{$item->qty}}</span>
                                            x
                                            <a href="{{route('shop.show',$item->id)}}">{{$item->name}}</a>
                                        </p>
                                        <a href="{{route('shop.show',$item->id)}}"></a>
                                        <span class="cart-price">$ {{ number_format($item->price) }}</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                @endforeach
                                <div class="total-cart-price">
                                    <div class="cart-product-line fast-line">
                                        <span>Shipping</span>
                                        <span class="free-shiping">${{Cart::tax()}}</span>
                                    </div>
                                    <div class="cart-product-line">
                                        <span>Total</span>
                                        <span class="total">$ {{Cart::total()}}</span>
                                    </div>
                                </div>
                                <div class="cart-checkout">
                                    <a href="{{route('cart.checkout')}}">
                                        Check out
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!--Header Area End-->
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="{{route('index')}}">HOME</a></li>
                                <li><a href="{{route('shop.index')}}">FEATURED</a></li>
                                <li><a href="{{route('index')}}">REVIEW BOOK</a></li>
                                <li><a href="{{route('about')}}">ABOUT AUTHOR</a></li>
                                <li><a href="#">pages</a>
                                </li>
                                <li><a href="{{route('contact')}}">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    <!-- Mobile Menu End -->   
    @yield('content')
    <!-- Footer Area Start -->
    <footer>
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-8">
                        <div class="footer-left">
                            <a href="index.html">
                                <img src="img/logo-2.png" alt="">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <ul class="footer-contact">
                                <li>
                                    <i class="flaticon-location"></i>
                                    {{$site->content->Address}}
                                </li>
                                <li>
                                    <i class="flaticon-technology"></i>
                                    {{$site->content->Phone}}
                                </li>
                                <li>
                                    <i class="flaticon-web"></i>
                                    {{$site->content->Email}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="single-footer">
                            <h2 class="footer-title">Information</h2>
                            <ul class="footer-list">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Manufactures</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-sm">
                        <div class="single-footer">
                            <h2 class="footer-title">My Account</h2>
                            <ul class="footer-list">
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="account.html">Login</a></li>
                                <li><a href="cart.html">My Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-sm">
                        <div class="single-footer">
                            <h2 class="footer-title">Shop</h2>
                            <ul class="footer-list">
                                <li><a href="#">Orders & Returns</a></li>
                                <li><a href="#">Search Terms</a></li>
                                <li><a href="#">Advance Search</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Group Sales</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-8">
                        <div class="single-footer footer-newsletter">
                            <h2 class="footer-title">Our Newsletter</h2>
                            <p>Consectetur adipisicing elit se do eiusm od tempor incididunt ut labore et dolore magnas aliqua.</p>
                            <form action="#" method="post">
                                <div>
                                    <input type="text" placeholder="email address">
                                </div>
                                <button class="btn btn-search btn-small" type="submit">SUBSCRIBE</button>
                                <i class="flaticon-networking"></i>
                            </form>
                            <ul class="social-icon">
                                <li>
                                    <a href="#">
                                        <i class="flaticon-social"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="flaticon-social-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="flaticon-social-2"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="flaticon-video"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 visible-sm">
                        <div class="single-footer">
                            <h2 class="footer-title">Shop</h2>
                            <ul class="footer-list">
                                <li><a href="#">Orders & Returns</a></li>
                                <li><a href="#">Search Terms</a></li>
                                <li><a href="#">Advance Search</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Group Sales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-bottom-left pull-left">
                            <p>Copyright &copy; 2016 <span><a href="https://freethemescloud.com/">Free themes Cloud</a></span>. All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-bottom-right pull-right">
                            <img src="img/paypal.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <!-- jquery Counterup js -->
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script> 
    <!-- jquery countdown js -->
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <!-- jquery countdown js -->
    <script type="text/javascript" src="{{asset('venobox/venobox.min.js')}}"></script>
    <!-- jquery Meanmenu js -->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('js/wow.min.js')}}"></script>   
    <script>
        new WOW().init();
    </script>
    <!-- scrollUp JS -->        
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Nivo slider js -->
    <script src="{{asset('lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/home.js')}}" type="text/javascript"></script>
    <!-- main js -->
    <script src="{{asset('js/main.js')}}"></script>
    
</body>
</html>
