@php
$request = request()->route()->getName();
@endphp
<section>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <div class="menu-area">
                <div class="collapse navbar-collapse" id="mobile_nav">
                    <ul class="navbar-nav mt-2 mt-lg-0"></ul>
                    <ul class="navbar-nav navbar-light">
                        <li class="nav-item">
                            <a class="nav-link {{ $request == 'cricket'? 'manue-active':'' }}" href="{{ route('cricket')}}">Cricket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $request == 'casino'? 'manue-active':'' }}" href="{{ route('casino')}}">Live Casino</a>
                        </li>
                        <!--========-->
                        <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link {{ $request == 'sloat'? 'manue-active':'' }}" href="{{ route('sloat')}}" id="dropdown01">Slot Games</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--=========-->
                        <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link {{ $request == 'tablegames'? 'manue-active':'' }}" href="{{ route('tablegames')}}">Table Games</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/pp_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link {{ $request == 'sportsbook'? 'manue-active':'' }}" href="{{ route('sportsbook')}}">Sportsbook</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/pp_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link {{ $request == 'fishing'? 'manue-active':'' }}" href="{{ route('fishing')}}"> Fishing</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/pp_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link {{ $request == 'crash'? 'manue-active':'' }}" href="{{ route('crash')}}">Crash</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/pp_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 mb-4">
                                        <div class="dp-g-img">
                                            <a href="#" target="_blank"><img src="{{ asset('assets/frontend/img/bajji-img/evo_new.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>
<!--end header-->
<!--start mobile menu-->
<div class="mobile-menu">
    <div class="mm-logo" style="background: #fff; padding: 11px 18px">
        <a href="{{ route('Home')}}">
            <img style="width:110px;" src="{{ asset('assets/frontend/img/logo/bajji99-logo.png') }}" />
        </a>
        <div class="mm-cross-icon">
            <i class="fa fa-times mm-ci"></i>
        </div>
    </div>
    <div class="mm-menu">
        <div class="accordion" id="accordionExample">
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{ route('Home')}}"><i class="fa fa-venus-double mr-2"></i>Home</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('cricket')}}"><i class="fa fa-venus-double mr-2"></i>Cricket</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('casino')}}"><i class="fa fa-venus-double mr-2"></i>Casino</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('sloat')}}"><i class="fa fa-venus-double mr-2"></i>Slot Games</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('tablegames')}}"><i class="fa fa-venus-double mr-2"></i>Table Games</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('sportsbook')}}"><i class="fa fa-venus-double mr-2"></i>Sportsbook</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('fishing')}}"><i class="fa fa-venus-double mr-2"></i>Fishing</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('crash')}}"><i class="fa fa-venus-double mr-2"></i>Crash <span
                            class="badge badge-success">new</span></a>
                </div>
                <div class="menu-link">
                    <span class="ml-2">Others</span>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-globe mr-2"></i> Language</a>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-question-circle-o mr-2"></i> FAQ</a>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-commenting-o mr-2"></i>Live Chat</a>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-download mr-2"></i>Download App</a>
                </div>
            </div>
        </div>
    </div>
</div>
