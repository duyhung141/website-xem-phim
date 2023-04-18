@extends('user.layout')
@section('main-content')
    <main>

        <!-- movie-details-area -->
        <section class="movie-details-area" data-background="img/bg/movie_details_bg.jpg">
            <div class="container-fluid" style="display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;">
                <div class="row">
                    <div class="col-md-12">
                        <video controls preload = "auto" poster="https://thuthuatnhanh.com/wp-content/uploads/2021/11/hinh-anh-chill-dep.jpg"  width="1300px" height="1000px";>
                            <source src="blob:https://www.youtube.com/3e274269-6a4f-4d43-b668-afb66b3a493b">
                          </video>
                    </div>
                </div>
            </div>
        </section>
        <!-- movie-details-area-end -->

        <!-- episode-area -->
        <section class="episode-area episode-bg" data-background="img/bg/episode_bg.jpg" >
            <div class="container">


                <div class="row" >
                    <div class="col-12" >
                        <div class="movie-history-wrap" >
                            <h3 class="title">About <span>History</span></h3>
                            <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                                variations of passages of lorem
                                Ipsum available, but the majority have suffered alteration in some injected humour.There
                                are
                                many variations of passages
                                of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised
                                words which don't look even slightly believable. If you are going to use a passage of
                                Lorem
                                Ipsum, you need to be sure
                                there isn't anything errassing hidden in the middle of text. All the Lorem Ipsum
                                generators
                                on the Internet tend to
                                repeat predefined chunks as necessary, making this the first true generator on the
                                Internet.
                                It uses a dictionary of
                                over 200 Latin words, combined with a handful</p>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-lg-8">
                        <div class="movie-episode-wrap">
                            <div class="episode-top-wrap">
                                <div class="section-title">
                                    <span class="sub-title">ONLINE STREAMING</span>
                                    <h2 class="title">Watch Full Episode</h2>
                                </div>
                                <div class="total-views-count">
                                    <p>2.7 million <i class="far fa-eye"></i></p>
                                </div>
                            </div>
                            <div class="episode-watch-wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div id="comment-tab">
    
                                            <div class="box-comment" id="tabs-facebook">
                                             
                                               <div id="mp-comments" class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://link.motphim.vip/phim/hoc-ky-sinh-tu-11100.html" data-numposts="10" data-order-by="reverse_time" data-colorscheme="light" data-width="650" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=711081303025670&amp;color_scheme=light&amp;container_width=650&amp;height=100&amp;href=https%3A%2F%2Flink.motphim.vip%2Fphim%2Fhoc-ky-sinh-tu-11100.html&amp;locale=vi_VN&amp;numposts=10&amp;order_by=reverse_time&amp;sdk=joey&amp;version=v7.0&amp;width=650"><span style="vertical-align: bottom; width: 650px; height: 1447px;"><iframe name="f279765141ca5e" width="650px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v7.0/plugins/comments.php?app_id=711081303025670&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df26cb1935e25698%26domain%3Dmotchill.tv%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fmotchill.tv%252Ff3b72ee23a52d64%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=650&amp;height=100&amp;href=https%3A%2F%2Flink.motphim.vip%2Fphim%2Fhoc-ky-sinh-tu-11100.html&amp;locale=vi_VN&amp;numposts=10&amp;order_by=reverse_time&amp;sdk=joey&amp;version=v7.0&amp;width=650" style="border: none; visibility: visible; width: 650px; height: 1447px;" class=""></iframe></span></div>					   <script>document.getElementById("mp-comments").dataset.width=$("#mp-comments").parent().width();</script>
                                            </div>
                                      
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="episode-img">
                            <img src="{{asset('img/images/episode_img.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- episode-area-end -->

        <!-- tv-series-area -->
        <section class="tv-series-area tv-series-bg" data-background="img/bg/tv_series_bg02.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">Best TV Series</span>
                            <h2 class="title">World Best TV Series</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="{{asset('img/poster/ucm_poster09.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="{{asset('img/poster/ucm_poster10.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">4k</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="{{asset('img/poster/ucm_poster03.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="{{asset('img/poster/ucm_poster04.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tv-series-area-end -->

     

    </main>
@endsection
