@extends('frontEnd.layout')
@section('title', $PageTitle)
@section('content')
    <style>
        @media (max-width: 992px) {
            .spring-img {
                display: none;
            }
        }
    </style>
    <section class="vip-profile-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="vip-profile-heading-box">
                        <h2>লগইন/রেজিস্টার করুন এখন BABU88 VIP হয়ে যান</h2>
                        <h3>প্রতি স্তরে <span>বিনামূল্যে</span> নগদ এবং একচেটিয়া পুরস্কার পান!</h3>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-dark mr-3">প্রবেশ করুন</a>
                            <a href="#" class="btn btn-warning">নিবন্ধন করুন</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="v-card" style="background: transparent !important; margin: 80px 0px;">
                        <div class="vip-summary-table white--text v-card">
                            <div class="row no-gutters align-center">
                                <div class="col col-2 pl-8">
                                    <h4 class="vip-title">স্তর</h4>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;">
                                        <img src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">1</span>
                                    </div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">2</span></div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">3</span></div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">4</span></div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">5</span></div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">6</span></div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">7</span></div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">8</span></div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">9</span></div>
                                </div>
                                <div class="text-center content col col-1">
                                    <div class="v-avatar" style="height: 48px; min-width: 48px; width: 48px;"><img
                                            src="{{ asset('assets/frontend/img/bajji-img/vip-level-no.png') }}"><span
                                            class="centered">10</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="vip-summary-table-content">
                            <div style="border-bottom: 0.5px solid white;">
                                <div class="row align-center">
                                    <div class="col col-2 pl-8">
                                        <h4 class="vip-title">পুরস্কার</h4>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12">
                                                <img src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2">
                                            </div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                    <div class="col col-1 content"
                                        style="display: flex; min-height: 150px; vertical-align: middle; justify-content: center;">
                                        <div class="row" style="align-self: center;">
                                            <div class="text-center col col-12"><img
                                                    src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                                    class="icon-size mb-2"></div>
                                            <div class="text-center col col-12 ri-content">
                                                <span>বিনামূল্যে</span>
                                                <br>
                                                <span>৳18</span>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 align-center">
                                <div class="col col-2 pl-8">
                                    <h4 class="vip-title">প্রয়োজনীয়তা</h4>
                                </div>
                                <div class="text-center content col col-1 ri-content"><span>৳400</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳1000</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳18</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳2600</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳3600</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳5100</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳6600</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳8100</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳9600</span></div>
                                <div class="text-center content col col-1 ri-content"><span>৳11100</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- vip mobile responsive start --}}
    <section class="vip-profile-mobile">
        <div class="vip-layout-background">


            <div class="mv-image-box">
                <div class="mv-img-bg"
                    style="background-image: url({{ asset('assets/frontend/img/bajji-img/BB88_BP.jpg') }}); background-position: center center;">
                </div>
            </div>
            <div class="row border-btn">
                <div class="mobile-progress-header-div">
                    <div class="mobile-lvl-card" cols="2" style="flex-grow: 2;">
                        Level
                        <div class="v-card__title justify-center lvl-title"></div>
                    </div>
                    <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
                        class="v-progress-linear vip-progress-bar v-progress-linear--visible theme--light" cols="6"
                        style="height: 35px; flex-grow: 6;">
                        <div class="v-progress-linear__background primary" style="opacity: 0.3; left: 0%; width: 100%;">
                        </div>
                        <div class="v-progress-linear__buffer"></div>
                        <div class="v-progress-linear__determinate primary" style="width: 0%;"></div>
                    </div>
                    <a href="#item_undefined" style="text-decoration: unset;">Go to My Level</a>
                </div>
            </div>
            <div class="row hidden-md-and-up justify-center no-gutters" style="margin-top: 20px;">
                <div class="vip-timeline-wrapper col">
                    <div class="v-timeline">
                        <div class="v-timeline-item" id="item_2">
                            <div class="v-timeline-item_icon">
                                <img src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                    class="icon-size resetInclineStyle">
                                <span>1</span>
                            </div>

                            <div class="v-timeline-item_price">
                                <div class="prizename-card text-center v-card v-sheet theme--light">
                                    <span class="prizename-span">
                                        বিনামূল্যে ৳
                                        18
                                    </span>
                                </div>
                            </div>
                            <div class="v-timeline-item_claimbtn">
                                <div class="claim-btn text-center"><span class="resetInclineStyle">Claim
                                        Prize</span></div>
                            </div>
                        </div>
                        <div class="v-timeline-item" id="item_2">
                            <div class="v-timeline-item_icon">
                                <img src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                    class="icon-size resetInclineStyle">
                                <span>2</span>
                            </div>

                            <div class="v-timeline-item_price">
                                <div class="prizename-card text-center v-card v-sheet theme--light">
                                    <span class="prizename-span">
                                        বিনামূল্যে ৳
                                        18
                                    </span>
                                </div>
                            </div>
                            <div class="v-timeline-item_claimbtn">
                                <div class="claim-btn text-center"><span class="resetInclineStyle">Claim
                                        Prize</span></div>
                            </div>
                        </div>
                        <div class="v-timeline-item" id="item_2">
                            <div class="v-timeline-item_icon">
                                <img src="{{ asset('assets/frontend/img/bajji-img/vip-reward-icon.png') }}"
                                    class="icon-size resetInclineStyle">
                                <span>3</span>
                            </div>

                            <div class="v-timeline-item_price">
                                <div class="prizename-card text-center v-card v-sheet theme--light">
                                    <span class="prizename-span">
                                        বিনামূল্যে ৳
                                        18
                                    </span>
                                </div>
                            </div>
                            <div class="v-timeline-item_claimbtn">
                                <div class="claim-btn text-center"><span class="resetInclineStyle">Claim
                                        Prize</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
