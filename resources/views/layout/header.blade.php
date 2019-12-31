<!doctype html>
<html class="no-js" lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon5a54.png')}}" type="image/png" />
    <meta charset="utf-8" />
    <title>Oto Hoàng Anh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
    <script src="{{ URL::asset('/js/jquery.min.1.11.0.js')}}"></script>
    <script src="{{ URL::asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('/js/default_script.min5a54.js')}}" type='text/javascript'></script>
    <link href="{{ URL::asset('/css/default_style.min5a54.css')}}" rel='stylesheet' type='text/css' media='all' />
    <script src="{{ URL::asset('/js/jquery-migrate-1.2.0.min.js')}}"></script>
    <script data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize" src="{{ URL::asset('/js/fixheightproductv2.js')}}"></script>
    <script src="{{ URL::asset('/js/jquery.flexslider.js')}}" type='text/javascript'></script>
    <link href="{{ URL::asset('/css/flexslider.css')}}" rel='stylesheet' type='text/css' media='all' />
    <script src="{{ URL::asset('/js/scripts5a54.js')}}" type='text/javascript'></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/roboto.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.3.3.1.css')}}">
    <link href="{{ URL::asset('/font-awesome/4.6.3/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ URL::asset('/css/styles5a54.css')}}" rel='stylesheet' type='text/css' media='all' />
</head>

<body>
    <nav id="menu-mobile" class="hidden">
        <ul>
            <li><a href="index.">Trang chủ</a></li>
            <li><a href="pages/dieu-khoan-dich-vu.html">Về chúng tôi</a></li>
            <li><a href="collections/all.html">Sản phẩm & Dịch vụ</a></li>
            <li><a href="pages/about-us.html">Hướng dẫn thuê xe</a></li>
            <li><a href="collections/dich-vu-sua-chua-bao-duong.html">Sửa chữa & Bảo dưỡng</a></li>
            <li><a href="blogs/news.html">Tin</a></li>
        </ul>
    </nav>
    <div id="page">
        <section id="page_content" class="">
            <div id="pageContainer" class="clearfix">
                <header class="header bkg visible-lg">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 logo">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-7 col-xs-7">
                                        <!-- LOGO -->
                                        <h1>
                                            <a href="{{url('/')}}">
                                                <img src="{{url('/img/logo5a54.png')}}" alt="Oto Hoàng Anh" class="img-responsive logoimg" />
                                            </a>
                                        </h1>
                                    </div>
                                    <div class="hidden-lg hidden-md col-sm-5 col-xs-5 mobile-icons">
                                        <div>
                                            <a href="#" title="Xem giỏ hàng" class="mobile-cart"><span>5</span></a>
                                            <a href="#" id="mobile-toggle"><i class="fa fa-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
                                <aside class="top-info">
                                    <div class="cart-info hidden-xs">
                                        <a class="cart-link" href="cart.html">
                                            <span class="icon-cart">
                                            </span>
                                            <div class="cart-number">
                                                0
                                            </div>
                                        </a>
                                        <div class="cart-view clearfix" style="display: none;">
                                            <table id="clone-item-cart" class="table-clone-cart">
                                                <tr class="item_2 hidden">
                                                    <td class="img"><a href="#" title=""><img src="#" alt="" /></a></td>
                                                    <td>
                                                        <a class="pro-title-view" href="#" title=""></a>
                                                        <span class="variant"></span>
                                                        <span class="pro-quantity-view"></span>
                                                        <span class="pro-price-view"></span>
                                                        <span class="remove_link remove-cart">
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table id="cart-view">
                                                <tr>
                                                    <td>Hiện chưa có sản phẩm</td>
                                                </tr>
                                            </table>
                                            <span class="line"></span>
                                            <table class="table-total">
                                                <tr>
                                                    <td class="text-left">TỔNG TIỀN:</td>
                                                    <td class="text-right" id="total-view-cart">0₫</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cart.html" class="linktocart">Xem giỏ hàng</a></td>
                                                    <td><a href="cart.html" class="linktocheckout">Thanh toán</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="navholder">
                                        <nav id="subnav">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>0999999999</a>
                                                </li>
                                                @if(Auth::user())
                                                <li><a class="reg" href="#" title="{{Auth::user()->name}}">{{Auth::user()->name}}</a></li>
                                                <li><a class="reg" href="{{url('/logout')}}" title="{{Auth::user()->name}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất <i class="fa fa-arrow-down"></i></a></li>
                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                @else
                                                <li><a class="reg" href="{{url('/register')}}" title="Đăng ký">ĐĂNG KÝ</a></li>
                                                <li><a class="log" href="{{url('/login')}}" title="Đăng nhập">Đăng nhập</a></li>
                                                @endif
                                            </ul>
                                        </nav>
                                        <div class="header_line">
                                            <p>DỊCH VỤ CHUYÊN NGHIỆP<span class="mar-l5">THỦ TỤC ĐƠN GIẢN</span></p>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </header>
                <nav class="navbar-main navbar navbar-default cl-pri">
                    <!-- MENU MAIN -->
                    <div class="container nav-wrapper check_nav">
                        <div class="row">
                            <div class="navbar-header">
                                <div class="mobile-menu-icon-wrapper">
                                    <div class="menu-logo">
                                        <h1 class="logo logo-mobile">
                                            <a href="index.tmdt">
                                                <img src="{{url('/img/logo5a54.png')}}" alt="Oto Hoàng Anh" class="img-responsive logoimg" />
                                            </a>
                                        </h1>
                                        <div class="nav-login">
                                            <a href="account/login.html" class="cart " title="Tài khoản">
                                                <svg class="icon icon-user" viewBox="0 0 32 32">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-user">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="menu-btn click-menu-mobile "><a href="#menu-mobile" class="navbar-toggle">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span></a>
                                        </div>
                                        <div id="cart-targets" class="cart">
                                            <a href="cart.html" class="cart " title="Giỏ hàng">
                                                <span>
                                                    <svg class="shopping-cart">
                                                        <use xmlns:xlink="//www.w3.org/1999/xlink" xlink:href="#icon-add-cart" />
                                                    </svg>
                                                </span>
                                                <span id="cart-count" class="cart-number">0</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="search-bar-top">
                                        <div class="search-input-top">
                                            <form action="/search">
                                                <input type="hidden" name="type" value="product" />
                                                <input type="text" name="q" placeholder="Tìm kiếm sản phẩm ..." />
                                                <button type="submit" class="icon-search">
                                                    <svg class="icon-search_white">
                                                        <use xmlns:xlink="//www.w3.org/1999/xlink" xlink:href="#icon-search_white" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav clearfix">
                                    <li>
                                        <a href="index.tmdt" class=" current" title="Trang chủ">
                                            <span>Trang chủ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/dieu-khoan-dich-vu.html" class="" title="Về chúng tôi">
                                            <span>Về chúng tôi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="collections/all.html" class="" title="Sản phẩm & Dịch vụ">
                                            <span>Sản phẩm & Dịch vụ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/about-us.html" class="" title="Hướng dẫn thuê xe">
                                            <span>Hướng dẫn thuê xe</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="collections/dich-vu-sua-chua-bao-duong.html" class="" title="Sửa chữa & Bảo dưỡng">
                                            <span>Sửa chữa & Bảo dưỡng</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blogs/news.html" class="" title="Tin">
                                            <span>Tin</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden-xs pull-right right-menu">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="col-md-12">
                                        <div class="search-bar">
                                            <div class="">
                                                <form action="/search">
                                                    <input type="hidden" name="type" value="product" />
                                                    <input type="text" name="q" placeholder="Tìm kiếm..." autocomplete="off" />
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div><!-- End container  -->
                </nav>
                <!-- Begin slider -->
                <div class="slider-default bannerslider">
                    <div class="hrv-banner-container">
                        <div class="hrvslider">
                            <ul class="slides">
                                <li>
                                    <a href="collections/all.html" class="hrv-url">
                                        <img class="img-responsive" src="{{url('/img/slideshow_15a54.jpg')}}" alt="Dịch vụ cho thuê; xe" />
                                    </a>
                                    <div id="hrv-banner-caption1" class="hrv-caption hrv-banner-caption">
                                        <div class="container">
                                            <div class="hrv-caption-inner">
                                                <div class="hrv-banner-content slider-1">
                                                    <h2 class="hrv-title1">DỊCH VỤ THUÊ XE HÀNG ĐẦU VIỆT NAM</h2>
                                                    <h3 class="hrv-title2">GỌI NGAY: 0999999999</h3>
                                                    <a href="collections/all.html" class="hrv-url">Xem ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="collections/all.html" class="hrv-url">
                                        <img class="img-responsive" src="{{url('/img/slideshow_25a54.jpg')}}" alt="Thực phẩm sạch" />
                                    </a>
                                    <div id="hrv-banner-caption2" class="hrv-caption hrv-banner-caption">
                                        <div class="container">
                                            <div class="hrv-caption-inner">
                                                <div class="hrv-banner-content slider-2">
                                                    <h2 class="hrv-title1">THỦ TỤC CHO THUÊ CỰC KỲ ĐƠN GIẢN</h2>
                                                    <h3 class="hrv-title2">GỌI NGAY: 0999999999</h3>
                                                    <a href="collections/all.html" class="hrv-url">Xem ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="collections/all.html" class="hrv-url">
                                        <img class="img-responsive" src="{{url('/img/slideshow_35a54.jpg')}}" alt="Th&#225;ng v&#224;ng ưu đ&#227;i" />
                                    </a>
                                    <div id="hrv-banner-caption3" class="hrv-caption hrv-banner-caption">
                                        <div class="container">
                                            <div class="hrv-caption-inner">
                                                <div class="hrv-banner-content slider-3">
                                                    <h2 class="hrv-title1"></h2>
                                                    <h3 class="hrv-title2">DÀN XE ĐỜI MỚI - CHỦNG LOẠI ĐA DẠNG</h3>
                                                    <a href="collections/all.html" class="hrv-url">Xem ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="collections/all.html" class="hrv-url">
                                        <img class="img-responsive" src="{{url('/img/slideshow_45a54.jpg')}}" alt="" />
                                    </a>
                                    <div id="hrv-banner-caption4" class="hrv-caption hrv-banner-caption">
                                        <div class="container">
                                            <div class="hrv-caption-inner">
                                                <div class="hrv-banner-content slider-4">
                                                    <h2 class="hrv-title1">DỊCH VỤ SỬA CHỮA Ô TÔ HOANG ANH</h2>
                                                    <h3 class="hrv-title2">LIÊN HỆ: 0999999999</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <script>
                    jQuery(document).ready(function() {
                        if ($('.slides li').size() > 0) {
                            $(".hrv-banner-container .slides").owlCarousel({
                                singleItem: true,
                                autoPlay: 5000,
                                items: 1,
                                itemsDesktop: [1199, 1],
                                itemsDesktopSmall: [980, 1],
                                itemsTablet: [768, 1],
                                itemsMobile: [479, 1],
                                slideSpeed: 500,
                                paginationSpeed: 500,
                                rewindSpeed: 500,
                                addClassActive: true,
                                navigation: true,
                                stopOnHover: true,
                                pagination: false,
                                scrollPerPage: true,
                                afterMove: nextslide,
                                afterInit: nextslide,
                            });

                            function nextslide() {
                                $(".hrv-banner-container .owl-item .hrv-banner-caption").css('display', 'none');
                                $(".hrv-banner-container .owl-item .hrv-banner-caption").removeClass('hrv-caption')
                                $(".hrv-banner-container .owl-item.active .hrv-banner-caption").css('display', 'block');

                                var heading = $('.hrv-banner-container .owl-item.active .hrv-banner-caption').clone().removeClass();
                                $('.hrv-banner-container .owl-item.active .hrv-banner-caption').remove();
                                $('.hrv-banner-container .owl-item.active>li').append(heading);
                                $('.hrv-banner-container .owl-item.active>li>div').addClass('hrv-banner-caption hrv-caption');
                            }

                        }
                    })
                </script>
            </div>
        </section>
    </div>
    