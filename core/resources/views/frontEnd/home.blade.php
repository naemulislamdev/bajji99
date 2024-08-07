@extends('frontEnd.layout')

@section('content')
    <!-- start Home Slider -->
    @include('frontEnd.includes.slider')
    <!-- end Home Slider -->
    <style>
        .nav {
            flex-wrap: nowrap;
        }
    </style>
    <section class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="register-banner">
                        <img src="{{ asset('assets/frontend/img/bajji-img/register_banner_home.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-3 desktop-v">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="heading-title">
                                <h3>হট গেমস</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Super Ace</h4>
                                    <span>JILI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Super Ace</h4>
                                    <span>JILI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Super Ace</h4>
                                    <span>JILI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Super Ace</h4>
                                    <span>JILI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Super Ace</h4>
                                    <span>JILI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Super Ace</h4>
                                    <span>JILI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Super Ace</h4>
                                    <span>JILI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Super Ace</h4>
                                    <span>JILI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categories-g-mobile-v">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link active" id="hot_game-tab" data-toggle="tab" href="#hot_game" role="tab"
                                aria-controls="hot_game" aria-selected="true">
                                <img src="{{ asset('assets/frontend/img/bajji-img/homepageHot.svg') }}" alt="">
                                <span>হট গেমস</span>
                            </a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="cricket-tab" data-toggle="tab" href="#cricket" role="tab"
                                aria-controls="cricket" aria-selected="false">
                                <img src="{{ asset('assets/frontend/img/bajji-img/cricket.svg') }}" alt="">
                                <span>ক্রিকেট</span>
                            </a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="casino-tab" data-toggle="tab" href="#casino" role="tab"
                                aria-controls="casino" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/ld.svg') }}" alt="">
                                <span>ক্যাসিনো</span></a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="slot-tab" data-toggle="tab" href="#slot" role="tab"
                                aria-controls="slot" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/rng.svg') }}" alt="">
                                <span>স্লট</span></a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/table.svg') }}" alt="">
                                <span>টেবিল খেলা</span></a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/fishing.svg') }}" alt="">
                                <span>মাছ ধরা</span></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="hot_game" role="tabpanel"
                            aria-labelledby="hot_game-tab">
                            <div class="row mt-3">
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cricket" role="tabpanel" aria-labelledby="cricket-tab">
                          <div class="row mt-3">
                            <div class="col">
                                <div class="md-cricket-img">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/cricket_betswiz_BDT.jpg') }}" alt="">
                                </div>
                                <div class="md-cricket-img">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/cricket_sap_BDT.jpg') }}" alt="">
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="casino" role="tabpanel" aria-labelledby="casino-tab">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="md-cricket-img">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/ld_evo.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-cricket-img">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/ld_pp.jpg') }}" alt="">
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="tab-pane fade" id="slot" role="tabpanel" aria-labelledby="slot-tab">
                            <div class="row mt-3">
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---Slider banner-->
    <section class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="slider-mobile-img">
                        <img src="{{ asset('assets/frontend/img/bajji-img/BJ99_mobile.png') }}" alt="">
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-banner-box"
                                    style="background-image: url({{ asset('assets/frontend/img/bajji-img/slider_banner.jpg') }});">
                                    <div class="row">
                                        <div class="col-md-7"></div>
                                        <div class="col-md-5">
                                            <div class="video-box">
                                                <iframe src="https://www.youtube.com/embed/uHVsGorTAIo?si=hADKpFCdAW-DQe0X"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-banner-box"
                                    style="background-image: url({{ asset('assets/frontend/img/bajji-img/slider_banner.jpg') }});">
                                    <div class="row">
                                        <div class="col-md-7"></div>
                                        <div class="col-md-5">
                                            <div class="video-box">
                                                <iframe src="https://www.youtube.com/embed/uHVsGorTAIo?si=hADKpFCdAW-DQe0X"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-banner-box"
                                    style="background-image: url({{ asset('assets/frontend/img/bajji-img/slider_banner.jpg') }});">
                                    <div class="row">
                                        <div class="col-md-7"></div>
                                        <div class="col-md-5">
                                            <div class="video-box">
                                                <iframe src="https://www.youtube.com/embed/uHVsGorTAIo?si=hADKpFCdAW-DQe0X"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
