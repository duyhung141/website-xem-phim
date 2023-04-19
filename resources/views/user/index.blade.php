@extends('user.layout')

@section('main-content')
    <main>
        <!-- up-coming-movie-area -->
        <section class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg"
                 style="background-image: {{url('img/bg/ucm_bg.jpg')}};">
            <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"
                 style="background-image: {{url('img/bg/ucm_bg_shape.png')}};"></div>
            <div class="container">
                <div class="row align-items-end mb-55">
                    <div class="col-lg-6">
                        <div class="section-title text-center text-lg-left">
                            <h2 class="title">Phim sắp chiếu</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ucm-nav-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href=""
                                       role="tab"
                                       aria-controls="tvShow" aria-selected="true">TV Shows</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab"
                                       aria-controls="movies" aria-selected="false">Phim</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab"
                                       aria-controls="anime" aria-selected="false">Anime</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                        <div class="ucm-active owl-carousel owl-loaded owl-drag">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-1330px, 0px, 0px); transition: all 0s ease 0s; width: 4323px;">
                                    <div class="owl-item cloned" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img
                                                        src="{{asset('img/poster/ucm_poster02.jpg')}}}" alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Perfect Match</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">4k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster03.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Dog Woof</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster04.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Easy Reach</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">8k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster05.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Cooking</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster01.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">Women's Day</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster02.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Perfect Match</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">4k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster03.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Dog Woof</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster04.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Easy Reach</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">8k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster05.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Cooking</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster01.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">Women's Day</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster02.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Perfect Match</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">4k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster03.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Dog Woof</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 302.5px; margin-right: 30px;">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster04.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Easy Reach</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">8k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="fas fa-angle-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="fas fa-angle-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                        <div class="ucm-active owl-carousel owl-loaded owl-drag">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster05.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Cooking</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster06.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Hikers</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">4k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster07.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">Life Quotes</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster08.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Beachball</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">4k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster03.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Dog Woof</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="fas fa-angle-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="fas fa-angle-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
                        <div class="ucm-active owl-carousel owl-loaded owl-drag">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster01.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">Women's Day</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster02.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Perfect Match</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">4k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster03.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Dog Woof</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster04.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Easy Reach</a>
                                                    </h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">8k</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster">
                                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster05.jpg')}}"
                                                                                  alt=""></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Cooking</a></h5>
                                                    <span class="date">2021</span>
                                                </div>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><span class="quality">hd</span></li>
                                                        <li>
                                                        <span class="duration"><i
                                                                class="far fa-clock"></i> 128 min</span>
                                                            <span class="rating"><i
                                                                    class="fas fa-thumbs-up"></i> 3.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="fas fa-angle-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="fas fa-angle-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- up-coming-movie-area-end -->


        <!-- top-rated-movie -->
        <section class="top-rated-movie tr-movie-bg" data-background="img/bg/tr_movies_bg.jpg"
                 style="background-image: {{url('img/bg/tr_movies_bg.jpg')}};">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-50">
                            <h2 class="title">Trending</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="tr-movie-menu-active text-center">
                            <button class="active" data-filter="*">TV Shows</button>
                            <button class="" data-filter=".cat-one">Movies</button>
                            <button class="" data-filter=".cat-two">documentary</button>
                            <button class="" data-filter=".cat-three">sports</button>
                        </div>
                    </div>
                </div>
                <div class="row tr-movie-active" style="position: relative; height: 1144.97px;">
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two"
                         style="position: absolute; left: 0%; top: 0px;">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster01.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">Women's Day</a></h5>
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
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three"
                         style="position: absolute; left: 24.9624%; top: 0px;">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster02.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Perfect Match</a></h5>
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
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two"
                         style="position: absolute; left: 50%; top: 0px;">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster03.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Dog Woof</a></h5>
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
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three"
                         style="position: absolute; left: 74.9624%; top: 0px;">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster04.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Easy Reach</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">8K</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two"
                         style="position: absolute; left: 0%; top: 572px;">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster05.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Cooking</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">3D</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three"
                         style="position: absolute; left: 24.9624%; top: 572px;">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster06.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Hikaru</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two"
                         style="position: absolute; left: 50%; top: 572px;">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster07.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">Life Quotes</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">4K</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three"
                         style="position: absolute; left: 74.9624%; top: 572px;">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster08.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Beachball</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">4K</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top-rated-movie-end -->

        <!-- tv-series-area -->
        <section class="tv-series-area tv-series-bg" data-background="img/bg/tv_series_bg.jpg"
                 style="background-image: {{url('img/bg/tv_series_bg.jpg')}};">
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
                    <div class="col-xl-2 col-lg-3 col-sm-5">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster09.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">Women's Day</a></h5>
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
                    <div class="col-xl-2 col-lg-3 col-sm-5">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster10.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Perfect Match</a></h5>
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
                    <div class="col-xl-2 col-lg-3 col-sm-5">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster03.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Dog Woof</a></h5>
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
                    <div class="col-xl-2 col-lg-3 col-sm-5">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster04.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Easy Reach</a></h5>
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
                    <div class="col-xl-2 col-lg-3 col-sm-5">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="{{route('user.movieDetails')}}"><img src="{{asset('img/poster/ucm_poster04.jpg')}}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{route('user.movieDetails')}}">The Easy Reach</a></h5>
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
