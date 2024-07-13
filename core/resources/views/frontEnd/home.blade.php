@extends('frontEnd.layout')

@section('content')

    <!-- start Home Slider -->
    @include('frontEnd.includes.slider')
    <!-- end Home Slider -->

   <section class="my-3">
      <div class="container">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="register-banner">
              <img src="{{asset('assets/frontend/img/bajji-img/register_banner_home.jpg')}}" alt=""/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="my-3">
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
                  <a href="#"
                    ><div class="play-box"><i class="fa fa-play"></i></div
                  ></a>
                  <div class="img-box">
                    <img src="{{asset('assets/frontend/img/bajji-img/g1.jpg')}}" alt="" />
                  </div>
                  <div class="content">
                    <h4>Super Ace</h4>
                    <span>JILI</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-4">
                <div class="game-box">
                  <a href="#"
                    ><div class="play-box"><i class="fa fa-play"></i></div
                  ></a>
                  <div class="img-box">
                    <img src="{{asset('assets/frontend/img/bajji-img/g1.jpg')}}" alt="" />
                  </div>
                  <div class="content">
                    <h4>Super Ace</h4>
                    <span>JILI</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-4">
                <div class="game-box">
                  <a href="#"
                    ><div class="play-box"><i class="fa fa-play"></i></div
                  ></a>
                  <div class="img-box">
                    <img src="{{asset('assets/frontend/img/bajji-img/g1.jpg')}}" alt="" />
                  </div>
                  <div class="content">
                    <h4>Super Ace</h4>
                    <span>JILI</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-4">
                <div class="game-box">
                  <a href="#"
                    ><div class="play-box"><i class="fa fa-play"></i></div
                  ></a>
                  <div class="img-box">
                    <img src="{{asset('assets/frontend/img/bajji-img/g1.jpg')}}" alt="" />
                  </div>
                  <div class="content">
                    <h4>Super Ace</h4>
                    <span>JILI</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-4">
                <div class="game-box">
                  <a href="#"
                    ><div class="play-box"><i class="fa fa-play"></i></div
                  ></a>
                  <div class="img-box">
                    <img src="{{asset('assets/frontend/img/bajji-img/g1.jpg')}}" alt="" />
                  </div>
                  <div class="content">
                    <h4>Super Ace</h4>
                    <span>JILI</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-4">
                <div class="game-box">
                  <a href="#"
                    ><div class="play-box"><i class="fa fa-play"></i></div
                  ></a>
                  <div class="img-box">
                    <img src="{{asset('assets/frontend/img/bajji-img/g1.jpg')}}" alt="" />
                  </div>
                  <div class="content">
                    <h4>Super Ace</h4>
                    <span>JILI</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-4">
                <div class="game-box">
                  <a href="#"
                    ><div class="play-box"><i class="fa fa-play"></i></div
                  ></a>
                  <div class="img-box">
                    <img src="{{asset('assets/frontend/img/bajji-img/g1.jpg')}}" alt="" />
                  </div>
                  <div class="content">
                    <h4>Super Ace</h4>
                    <span>JILI</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-4">
                <div class="game-box">
                  <a href="#"
                    ><div class="play-box"><i class="fa fa-play"></i></div
                  ></a>
                  <div class="img-box">
                    <img src="{{asset('assets/frontend/img/bajji-img/g1.jpg')}}" alt="" />
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
    <!---Slider banner-->
    <section class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="carousel-banner-box" style="background-image: url({{asset('assets/frontend/img/bajji-img/slider_banner.jpg')}});">
                                <div class="row">
                                    <div class="col-md-7"></div>
                                    <div class="col-md-5">
                                        <div class="video-box">
                                            <iframe src="https://www.youtube.com/embed/uHVsGorTAIo?si=hADKpFCdAW-DQe0X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="carousel-banner-box" style="background-image: url({{asset('assets/frontend/img/bajji-img/slider_banner.jpg')}});">
                                <div class="row">
                                    <div class="col-md-7"></div>
                                    <div class="col-md-5">
                                        <div class="video-box">
                                            <iframe src="https://www.youtube.com/embed/uHVsGorTAIo?si=hADKpFCdAW-DQe0X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="carousel-banner-box" style="background-image: url({{asset('assets/frontend/img/bajji-img/slider_banner.jpg')}});">
                                <div class="row">
                                    <div class="col-md-7"></div>
                                    <div class="col-md-5">
                                        <div class="video-box">
                                            <iframe src="https://www.youtube.com/embed/uHVsGorTAIo?si=hADKpFCdAW-DQe0X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
