<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="utf-8"/>
    <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta name="theme-color" content="#234556">
    <meta http-equiv="Content-Language" content="vi"/>
    <meta content="VN" name="geo.region"/>
    <meta name="DC.language" scheme="utf-8" content="vi"/>
    <meta name="language" content="Việt Nam">


    <link rel="shortcut icon"
          href="https://www.pngkey.com/png/detail/360-3601772_your-logo-here-your-company-logo-here-png.png"
          type="image/x-icon"/>
    <meta name="revisit-after" content="1 days"/>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <title>Phim hay 2021 - Xem phim hay nhất</title>
    <meta name="description"
          content="Phim hay 2021 - Xem phim hay nhất, xem phim online miễn phí, phim hot , phim nhanh"/>
    <link rel="canonical" href="">
    <link rel="next" href=""/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:title" content="Phim hay 2020 - Xem phim hay nhất"/>
    <meta property="og:description"
          content="Phim hay 2020 - Xem phim hay nhất, phim hay trung quốc, hàn quốc, việt nam, mỹ, hong kong , chiếu rạp"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="Phim hay 2021- Xem phim hay nhất"/>
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="55"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel='dns-prefetch' href='//s.w.org'/>

    <link rel='stylesheet' id='bootstrap-css' href={{asset('user/css/bootstrap.min.css?ver=5.7.2')}} media='all'/>
    <link rel='stylesheet' id='style-css' href="{{asset('user/css/style.css?ver=5.7.2')}}" media='all'/>
    <link rel='stylesheet' id='wp-block-library-css' href={{asset('user/css/style.min.css?ver=5.7.2')}} media='all'/>
    <script type='text/javascript' src={{asset('user/js/jquery.min.js?ver=5.7.2')}} id='halim-jquery-js'></script>
    <style type="text/css" id="wp-custom-css">
        .textwidget p a img {
            width: 100%;
        }
    </style>
    <style>#header .site-title {
            background: url(https://www.pngkey.com/png/detail/360-3601772_your-logo-here-your-company-logo-here-png.png) no-repeat top left;
            background-size: contain;
            text-indent: -9999px;
        }</style>
</head>
<body class="home blog halimthemes halimmovies" data-masonry="">
<!--start header-->
<header id="header">
    <div class="container">
        <div class="row" id="headwrap">
            <div class="col-md-3 col-sm-6 slogan">
                <p class="site-title"><a class="logo" href="" title="phim hay ">Phim Hay
                    </a></p>
            </div>
            <div class="col-md-5 col-sm-6 halim-search-form hidden-xs">
                <div class="header-nav">
                    <div class="col-xs-12">
                        <form id="search-form-pc" name="halimForm" role="search">
                            {{--                            @csrf--}}
                            <div class="form-group">
                                <div class="input-group col-xs-12">
                                    <input id="search" type="text" name="s" class="form-control"
                                           placeholder="Tìm kiếm..." autocomplete="off" required>
                                    <i class="animate-spin hl-spin4 hidden"></i>
                                </div>
                            </div>
                        </form>
                        <ul class="ui-autocomplete ">
                            <div id="search-results" class="">

                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-xs">
                <ul>
                    @auth
                        <li class="btn"><a href="#" class="btn btn-warning">{{ auth()->user()->name }}</a></li>
                        <li class="btn"><a href="{{ route('logout') }}" class="btn btn-info"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                xuất</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="btn"><a href="{{ route('login') }}" class="btn btn-warning">Đăng nhập</a></li>
                        <li class="btn "><a href="{{ route('register') }}" class="btn btn-info">Đăng ký</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="navbar-container">
    <div class="container">
        <nav class="navbar halim-navbar main-navigation" role="navigation" data-dropdown-hover="1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse"
                        data-target="#halim" aria-expanded="true">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="halim"  aria-expanded="true">
                <div class="menu-menu_1-container">
                    <ul id="menu-menu_1" class="nav navbar-nav navbar-left">
                        <li class="current-menu-item active"><a title="Trang Chủ" href={{route('user.index')}}>Trang
                                Chủ</a></li>
                        <li class="mega"><a title="Phim Mới" href={{route('user.movies-option')}}>Phim Mới</a></li>
                        <li class="mega dropdown">
                            <a title="Thể Loại" href="#" data-toggle="dropdown" class="dropdown-toggle"
                               aria-haspopup="true">Thể Loại <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <?php $categories = \App\Models\Category::all(); ?>
                                @foreach ($categories as $category)
                                    <li><a href={{route('user.movies-option')}}>{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="mega dropdown">
                            <a title="Quốc Gia" href="#" data-toggle="dropdown" class="dropdown-toggle"
                               aria-haspopup="true">Quốc Gia <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <?php $countries = \App\Models\Category::all(); ?>
                                @foreach ($countries as $country)
                                    <li><a href={{route('user.movies-option')}}>{{$country->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a title="Phim Lẻ" href={{route('user.movies-option')}}>Phim Lẻ</a></li>
                        <li><a title="Phim Chiếu Rạp" href={{route('user.movies-option')}}>Phim Chiếu Rạp</a></li>
                    </ul>
                </div>
{{--                <ul class="nav navbar-nav navbar-left" style="background:#000;">--}}
{{--                    <li><a href="#" onclick="locphim()" style="color: #ffed4d;">Lọc Phim</a></li>--}}
{{--                </ul>--}}
            </div>
        </nav>
{{--        <div class="collapse navbar-collapse" id="search-form">--}}
{{--            <div id="mobile-search-form" class="halim-search-form"></div>--}}
{{--        </div>--}}
        <div class="collapse navbar-collapse" id="user-info">
            <div id="mobile-user-login"></div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row fullwith-slider"></div>
</div>
<!--end header-->

@section('content')
@show

<!--start footer-->
<div class="clearfix"></div>
<footer id="footer" class="clearfix">
    <div class="container footer-columns">
        <div class="row container">
            <div class="widget about col-xs-12 col-sm-4 col-md-4">
                <div class="footer-logo">
                    <img class="img-responsive"
                         src="https://img.favpng.com/9/23/19/movie-logo-png-favpng-nRr1DmYq3SNYSLN8571CHQTEG.jpg"
                         alt="Phim hay 2021- Xem phim hay nhất"/>
                </div>
                Liên hệ QC: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                               data-cfemail="e5958d8c888d849ccb868aa58288848c89cb868a88">[email&#160;protected]</a>
            </div>
        </div>
    </div>
</footer>
<div id='easy-top'></div>
<!--end footer-->

<style>#overlay_mb {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        cursor: pointer
    }

    #overlay_mb .overlay_mb_content {
        position: relative;
        height: 100%
    }

    .overlay_mb_block {
        display: inline-block;
        position: relative
    }

    #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
        width: 600px;
        height: auto;
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center
    }

    #overlay_mb .overlay_mb_content .cls_ov {
        color: #fff;
        text-align: center;
        cursor: pointer;
        position: absolute;
        top: 5px;
        right: 5px;
        z-index: 999999;
        font-size: 14px;
        padding: 4px 10px;
        border: 1px solid #aeaeae;
        background-color: rgba(0, 0, 0, 0.7)
    }

    #overlay_mb img {
        position: relative;
        z-index: 999
    }

    @media only screen and (max-width: 768px) {
        #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
            width: 400px;
            top: 3%;
            transform: translate(-50%, 3%)
        }
    }

    @media only screen and (max-width: 400px) {
        #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
            width: 310px;
            top: 3%;
            transform: translate(-50%, 3%)
        }
    }</style>

<style>
    #overlay_pc {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        cursor: pointer;
    }

    #overlay_pc .overlay_pc_content {
        position: relative;
        height: 100%;
    }

    .overlay_pc_block {
        display: inline-block;
        position: relative;
    }

    #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
        width: 600px;
        height: auto;
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    #overlay_pc .overlay_pc_content .cls_ov {
        color: #fff;
        text-align: center;
        cursor: pointer;
        position: absolute;
        top: 5px;
        right: 5px;
        z-index: 999999;
        font-size: 14px;
        padding: 4px 10px;
        border: 1px solid #aeaeae;
        background-color: rgba(0, 0, 0, 0.7);
    }

    #overlay_pc img {
        position: relative;
        z-index: 999;
    }

    #search-results{
        position: absolute;
        z-index: 999;
        width:100%;
        background-color: #1b2d3c;
    }
    @media only screen and (max-width: 768px) {
        #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
            width: 400px;
            top: 3%;
            transform: translate(-50%, 3%);
        }
    }

    @media only screen and (max-width: 400px) {
        #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
            width: 310px;
            top: 3%;
            transform: translate(-50%, 3%);
        }
    }
</style>

<style>
    .float-ck {
        position: fixed;
        bottom: 0px;
        z-index: 9
    }

    /** html .float-ck !* IE6 position fixed Bottom *!*/
    /*{*/
    /*    position: absolute;*/
    /*    bottom: auto;*/
    /*    to: expression(eval (document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)));*/
    /*}*/

    #hide_float_left a {
        background: #0098D2;
        padding: 5px 15px 5px 15px;
        color: #FFF;
        font-weight: 700;
        float: left;
    }

    #hide_float_left_m a {
        background: #0098D2;
        padding: 5px 15px 5px 15px;
        color: #FFF;
        font-weight: 700;
    }

    span.bannermobi2 img {
        height: 70px;
        width: 300px;
    }

    #hide_float_right a {
        background: #01AEF0;
        padding: 5px 5px 1px 5px;
        color: #FFF;
        float: left;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script type='text/javascript' src={{asset('user/js/bootstrap.min.js?ver=5.7.2')}} id='bootstrap-js'></script>
<script type='text/javascript' src={{asset('user/js/owl.carousel.min.js?ver=5.7.2')}} id='carousel-js'></script>

<script type='text/javascript'
        src={{asset('user/js/halimtheme-core.min.js?ver=1626273138')}} id='halim-init-js'></script>
<script>
    $(document).ready(function () {
        $("#search-form-pc").keyup(function (e) {
            e.preventDefault(); // ngăn chặn chuyển hướng đến trang khác khi submit form
            var formData = $('#search').val(); // lấy dữ liệu từ form
            $.ajax({
                type: "GET",
                {{--url: "{{ route('user.doSearch') }}",--}}
                url: 'http://127.0.0.1:8000/api/test',
                data: {s: formData},
                success: function (data) {
                    const nameList = data?.map(function (item) {
                        return `<li>${item.name}</li>`;
                    }).join('');
                    $("#search-results").html(`
                            <h3>Kết quả tìm kiếm</h3>
                <ul class="name-list">
                    ${nameList}
                 </ul>
`)
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

    });
    $('body').on('click', function(e) {
        // Nếu click vào nơi ngoài vùng chứa kết quả
        if (!$(e.target).closest('#search-results').length) {
            // Ẩn kết quả render bằng cách xóa nội dung của thẻ có id là "search-results"
            $('#search-results').html('')
        }
    });
    // var isMenuOpen = false;
    // $(".navbar-toggle").click(function(){
    //     $(this).toggleClass("collapsed");
    //     if (!isMenuOpen) {
    //         $("#halim").slideDown();
    //         isMenuOpen = true;
    //     } else {
    //         $("#halim").slideUp();
    //         isMenuOpen = false;
    //     }
    // });
</script>

</body>
</html>
