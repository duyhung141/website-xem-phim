
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movflx - Online Movies & TV Shows Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <style>.--savior-overlay-transform-reset {
            transform: none !important;
        }

        .--savior-overlay-z-index-top {
            z-index: 2147483643 !important;
        }

        .--savior-overlay-position-relative {
            position: relative;
        }

        .--savior-overlay-overflow-x-visible {
            overflow-x: visible !important;
        }

        .--savior-overlay-overflow-y-visible {
            overflow-y: visible !important;
        }

        .--savior-overlay-z-index-reset {
            z-index: auto !important;
        }

        .--savior-overlay-display-none {
            display: none !important;
        }

        .--savior-overlay-clearfix {
            clear: both;
        }

        .--savior-overlay-reset-filter {
            filter: none !important;
            backdrop-filter: none !important;
        }

        .--savior-tooltip-host {
            z-index: 9999;
            position: absolute;
            top: 0;
        }

        /*Override css styles for Twitch.tv*/
        main.--savior-overlay-z-index-reset {
            z-index: auto !important;
        }

        main.--savior-overlay-z-index-top {
            z-index: auto !important;
        }

        main.--savior-overlay-z-index-top .channel-root__player-container + div,
        main.--savior-overlay-z-index-top .video-player-hosting-ui__container + div {
            opacity: 0.1;
        }

        /*Dirty hack for facebook big video page e.g: https://www.facebook.com/abc/videos/...*/
        .--savior-backdrop {
            position: fixed !important;
            z-index: 2147483642 !important;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw !important;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .--savior-overlay-twitter-video-player {
            position: fixed;
            width: 80%;
            height: 80%;
            top: 10%;
            left: 10%;
        }

        /* Fix conflict css with zingmp3 */
        .zm-video-modal.--savior-overlay-z-index-reset {
            position: absolute;
        }

        /* Dirty hack for xvideos99 */
        #page #main.--savior-overlay-z-index-reset {
            z-index: auto !important;
        }

        /* Overlay for ok.ru */
        #vp_w.--savior-overlay-z-index-reset.media-layer.media-layer__video {
            position: absolute;
            overflow-y: hidden;
        }

        /* Fix missing controller for tv.naver.com */
        .--savior-overlay-z-index-top.rmc_controller,
        .--savior-overlay-z-index-top.rmc_setting_intro,
        .--savior-overlay-z-index-top.rmc_highlight,
        .--savior-overlay-z-index-top.rmc_control_settings {
            z-index: 2147483644 !important;
        }

        /* Dirty hack for douyi.com */
        .swiper-wrapper.--savior-overlay-z-index-reset .swiper-slide:not(.swiper-slide-active),
        .swiper-wrapper.--savior-overlay-transform-reset .swiper-slide:not(.swiper-slide-active) {
            display: none;
        }

        .videoWrap + div > div {
            pointer-events: unset;
        }

        /* Dirty hack for fpt.ai */
        .mfp-wrap.--savior-overlay-z-index-top {
            position: relative;
        }

        .mfp-wrap.--savior-overlay-z-index-top .mfp-close {
            display: none;
        }

        .mfp-wrap.--savior-overlay-z-index-top .mfp-content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        section.--savior-overlay-z-index-reset > main[role="main"].--savior-overlay-z-index-reset + nav {
            z-index: -1 !important;
        }

        section.--savior-overlay-z-index-reset > main[role="main"].--savior-overlay-z-index-reset section.--savior-overlay-z-index-reset div.--savior-overlay-z-index-reset ~ div {
            position: relative;
        }

        div[class^="tiktok"].--savior-overlay-z-index-reset {
            z-index: 2147483644 !important;
        }

        @-moz-keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-o-keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<!-- preloader -->
<div id="preloader">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <img src="{{asset('img/preloader.svg')}}" alt="">
        </div>
    </div>
</div>
<!-- preloader-end -->

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="{{route('user.index')}}">
                                    <img src="{{asset('img/logo/logo.png')}}" alt="Logo">
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a
                                            href="{{route('user.index')}}">Trang chủ</a>
                                    </li>
                                    <li><a href="">Thể loại</a>
                                        <ul class="submenu">
                                            @foreach ($categories as $category)
                                                <li><a href="">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="">Quốc gia</a>
                                        <ul class="submenu">
                                            @foreach ($countries as $country)
                                                <li><a href="">{{$country->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Phim mới</a></li>
                                    <li><a href="">Phim lẻ</a></li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-search"><a href="#" data-toggle="modal"
                                                                 data-target="#search-modal"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                                    <li class="header-btn"><a href="{{route('login')}}" class="btn">Đăng nhập</a></li>
                                    <li class="header-btn"><a href="{{route("register")}}" class="btn">Đăng ký</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class="nav-logo"><a href="index.html"><img src="{{asset('img/logo/logo.png')}}" alt=""
                                                                            title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                    <!-- Modal Search -->
                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Tìm kiếm">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Search-end -->

                </div>
            </div>
            <nav aria-label="breadcrumb">
                <?php
                if(!Request::is("/")){?>
                <ol class="breadcrumb" style = "background:none">
                  <li class="breadcrumb-item"><a href="{{route("user.index")}}">Trang chủ</a></li>
                  <li class="breadcrumb-item"><a href="#">Phim gì đó</a></li>
                  <li class="breadcrumb-item"><a href="#">Tên phim gì đó</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tập full</li>
                </ol>
                <?php }?>
              </nav>
        </div>
        
    </div>
    
</header>
<!-- header-area-end -->


<!-- main-area -->

@section('oscar-content')
@show
@section('hot-content')
@show
@section('main-content')
@show
<!-- main-area-end -->

<!-- JS here -->
<script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.odometer.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/ajax-form.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
