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
    {{-- <section class="register-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="register-banner">
                        <img src="{{ asset('assets/frontend/img/bajji-img/register_banner_home.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="my-3 desktop-v">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="heading-title">
                                <h3>Hot Games</h3>
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
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img1.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Lightning Storm</h4>
                                    <span>EVOLUTION GAMING</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img2.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Wild Bounty Showdown</h4>
                                    <span>PG SOFT</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img3.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Laughing Buddha</h4>
                                    <span>HABANERO</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img4.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Mystic Fortune Deluxe</h4>
                                    <span>HABANERO</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img5.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Fortune Gems 2</h4>
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
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img6.png') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Crazy Time</h4>
                                    <span>EVOLUTION GAMING</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img7.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Evo Funky Time</h4>
                                    <span>EVOLUTION GAMING</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img8.png') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Aviator</h4>
                                    <span>SPRIBE</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img9.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>NFT Aviatrix</h4>
                                    <span>AVIATRIX</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img12.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Mega Fishing</h4>
                                    <span>SPRIBE</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img10.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>JetX</h4>
                                    <span>SPRIBE</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="game-box">
                                <a href="#">
                                    <div class="play-box"><i class="fa fa-play"></i></div>
                                </a>
                                <div class="img-box">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/img11.webp') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Bombing Fishing</h4>
                                    <span>SPRIBE</span>
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
                                <span>Hot Games</span>
                            </a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="cricket-tab" data-toggle="tab" href="#cricket" role="tab"
                                aria-controls="cricket" aria-selected="false">
                                <img src="{{ asset('assets/frontend/img/bajji-img/cricket.svg') }}" alt="">
                                <span>Cricket</span>
                            </a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="casino-tab" data-toggle="tab" href="#casino" role="tab"
                                aria-controls="casino" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/ld.svg') }}" alt="">
                                <span>Casino</span></a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="slot-tab" data-toggle="tab" href="#slot" role="tab"
                                aria-controls="slot" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/rng.svg') }}" alt="">
                                <span>Slot Games</span></a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="tablegame-tab" data-toggle="tab" href="#tablegame" role="tab"
                                aria-controls="tablegame" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/table.svg') }}" alt="">
                                <span>Table Games</span></a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="sportbook-tab" data-toggle="tab" href="#sportbook" role="tab"
                                aria-controls="sportbook" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/football.svg') }}" alt="">
                                <span>Sportsbook</span></a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="fishing-tab" data-toggle="tab" href="#fishing" role="tab"
                                aria-controls="fishing" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/fishing.svg') }}" alt="">
                                <span>Fishing</span></a>
                        </li>
                        <li class="nav-item homePageCat-box">
                            <a class="nav-link" id="crash-tab" data-toggle="tab" href="#crash" role="tab"
                                aria-controls="crash" aria-selected="false"><img
                                    src="{{ asset('assets/frontend/img/bajji-img/crash.svg') }}" alt="">
                                <span>Crash</span></a>
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img1.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img2.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img3.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img4.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img5.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img6.png') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img7.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img8.png') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img9.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img10.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img11.webp') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/img12.webp') }}"
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
                                <div class="col-6">
                                    <div class="md-casino-img">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/ld_evo.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="md-casino-img">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/ld_pp.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="md-casino-img">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/casino1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="md-casino-img">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/casino3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="md-casino-img">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/casino2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="md-casino-img">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/casino4.jpg') }}" alt="">
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot1.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot2.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot3.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot4.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot6.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot5.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tablegame" role="tabpanel" aria-labelledby="tablegame-tab">
                            <div class="row mt-3">
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot3.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot1.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot4.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot2.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot6.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot5.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sportbook" role="tabpanel" aria-labelledby="sportbook-tab">
                            <div class="row mt-3">
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot3.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot1.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot4.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot2.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot6.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot5.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fishing" role="tabpanel" aria-labelledby="fishing-tab">
                            <div class="row mt-3">
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot3.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot1.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot4.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot5.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot2.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot6.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="crash" role="tabpanel" aria-labelledby="crash-tab">
                            <div class="row mt-3">
                                <div class="col md-g-box">
                                    <div class="game-box">
                                        <a href="#">
                                            <div class="play-box"><i class="fa fa-play"></i></div>
                                        </a>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot2.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot6.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot5.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot3.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot1.jpg') }}"
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
                                            <img src="{{ asset('assets/frontend/img/bajji-img/slot4.jpg') }}"
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
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="heading-title">
                                <h3>Download App</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="download-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/bajji-img/bajji99_downloadnow.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
