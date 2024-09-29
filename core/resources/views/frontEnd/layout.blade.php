<!DOCTYPE html>
<html lang="{{ @Helper::currentLanguage()->code }}" dir="{{ @Helper::currentLanguage()->direction }}">

<head>
    @include('frontEnd.includes.head')
    <style>
        .header-right-btn {
            padding: 10px 20px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 6px !important;
            background-color: #15092e;
            color: #fff;
        }

        .header-dwn-btn {
            width: 90px;
        }

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .loading-image {
            background-color: white;
            border-radius: 50%;
            opacity: 0.8;
            z-index: 9999;
            width: 200px;
            height: 200px;
            text-align: center;
            box-shadow: inset 0px 0px 40px 40px #fff;
        }

        .loading-image>img {
            width: 157px;
            padding: 76px 5px;
        }

        .top-lan-btn {
            background: #ddd;
        }
    </style>
</head>

<body>

    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-image" id="loadingImage">
            <img src="{{ asset('assets/frontend/img/logo/bajji99-logo.png') }}" alt="Loading">
        </div>
    </div>
    <div class="top-section py-2">
        <div class="container">
            <div class="top-bar d-flex align-items-center justify-content-between">
                <i class="fa fa-bars menu-icon"></i>
                <div class="top-left">
                    <a href="{{ route('Home') }}"><img src="{{ asset('assets/frontend/img/logo/logo11.png') }}"
                            alt="" /></a>
                </div>
                <div class="top-right d-flex">
                    @if (Auth::check())
                        <div class="profile-manue d-flex">
                            <a href="{{ route('user.profile') }}">{{ Auth::user()->name }}</a>
                            <a href="{{ route('user.profile') }}" class="profile-icon"><i class="fa fa-user"></i></a>
                            <a href="#" class="profile-icon"><i class="fa fa-bell"></i></a>
                        </div>
                    @else
                        <div class="top-bar-right-btn">
                            <a href="{{ route('front.login') }}" class="btn mr-2 header-right-btn">Login</a>
                            {{-- <a href="{{ route('front.register') }}" class="btn btn-primary mr-2 header-right-btn">এখনি
                                যোগদিন</a> --}}
                        </div>
                    @endif
                    <div class="mobile-login-btn">
                        <a href="{{ route('front.login') }}" class="btn">Login</a>
                    </div>
                    <div class="dropdown header-dwn-btn">
                        <button style="width:80%; border-radius:8px !important; float: right;"
                            class="btn top-lan-btn dropdown-toggle p-1" type="button" data-toggle="modal"
                            data-target="#topRightLanguModal">
                            <img class="top-right-img" src="{{ asset('assets/frontend/img/bajji-img/bdt.svg') }}"
                                alt="" />
                        </button>
                    </div>
                    @if (Auth::check())
                        <div class="logout-icon d-flex align-content-center">
                            <a href="{{ route('user.logout') }}"><i class="fa fa-unlock-alt"></i></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!--Language Modal -->
    <div class="modal fade" id="topRightLanguModal" tabindex="-1" data-backdrop="static" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #cf07cf;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">
                        Currency And Language
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-item-center justify-space-between">
                        <div class="col col-2 mb-3">
                            <div class="language-img" style="height: 35px; min-width: 35px; width: 35px;">
                                <img src="{{ asset('assets/frontend/img/logo/BDT.svg') }}">
                            </div>
                        </div>
                        <div class="text-center col col-2 lan-currency px-1 mb-3"><label>BDT</label></div>
                        <div class="col col-8 mb-3">
                            <div class="row">
                                <div class="text-right col col-6 px-1 lan-btn">
                                    <button type="button" value="EN" class="">English</button>
                                </div>
                                <div class="text-right col col-6 px-1 lan-btn">
                                    <button type="button" value="BN" class="">Bangla</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-item-center justify-space-between">
                        <div class="col col-2 mb-3">
                            <div class="language-img" style="height: 35px; min-width: 35px; width: 35px;">
                                <img src="{{ asset('assets/frontend/img/logo/malaysia.png') }}">
                            </div>
                        </div>
                        <div class="text-center col col-2 lan-currency px-1 mb-3"><label>MYR</label></div>
                        <div class="col col-8 mb-3">
                            <div class="row">
                                <div class="text-right col col-6 px-1 lan-btn mx-auto">
                                    <button type="button" value="EN" class="">English</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
    <!-- start header -->
    @include('frontEnd.includes.header')
    <!-- end header -->

    <!-- Content Section -->
    <div class="contents">
        @yield('content')
    </div>
    <!-- end of Content Section -->

    <!-- start footer -->
    @include('frontEnd.includes.footer')
    <!-- end footer -->
    @if (Auth::check())
        {{-- <div class="bottom-btn">
            <div class="d-flex">
                <a href="#" class="bottom-btn1">প্রবেশ করুন</a>
                <a href="#" class="bottom-btn2">এখনি যোগদিন</a>
            </div>
        </div> --}}
        <div class="bottom-btn">
            <div class="d-flex ud-ac-manue">
                <a href="#" class="ud-ac-manue-item">
                    <div class="v-btn">
                        <img src="{{ asset('assets/frontend/dashboard/image/icon/referral.svg') }}" alt="">
                        <p>Referral</p>
                    </div>
                </a>
                <a href="#" class="ud-ac-manue-item">
                    <div class="v-btn">
                        <img src="{{ asset('assets/frontend/dashboard/image/icon/promotion.svg') }}" alt="">
                        <p>Promotion</p>
                    </div>
                </a>
                <a href="#" class="ud-ac-manue-item">
                    <div class="v-btn">
                        <img src="{{ asset('assets/frontend/dashboard/image/icon/home.svg') }}" alt="">
                        <p>Home</p>
                    </div>
                </a>
                <a href="#" class="ud-ac-manue-item">
                    <div class="v-btn">
                        <img src="{{ asset('assets/frontend/dashboard/image/icon/deposit.svg') }}" alt="">
                        <p>Deposit</p>
                    </div>
                </a>
                <a href="#" class="ud-ac-manue-item">
                    <div class="v-btn">
                        <img src="{{ asset('assets/frontend/dashboard/image/icon/account.svg') }}" alt="">
                        <p>Account</p>
                    </div>
                </a>
            </div>
        </div>
    @endif
    </div>
    @include('frontEnd.includes.foot')
    @yield('footerInclude')

    @if (Helper::GeneralSiteSettings('style_preload'))
        <div id="preloader"></div>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(window).load(function() {
                    $('#preloader').fadeOut('slow', function() {
                        // $(this).remove();
                    });
                });
            });
        </script>
    @endif
    @if (Helper::GeneralSiteSettings('style_header'))
        <script type="text/javascript">
            window.onscroll = function() {
                myFunction()
            };
            var header = document.getElementsByTagName("header")[0];
            var sticky = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>
    @endif
    <script>
        $(document).ready(function() {
            // Show the loading overlay on menu link click
            $('.menu-link').on('click', function() {
                $('#loadingOverlay').show();
            });

            // Hide the loading overlay when the page is fully loaded
            $(window).on('load', function() {
                $('#loadingOverlay').hide();
            });
        });
    </script>

    @Stack('script')
</body>

</html>
