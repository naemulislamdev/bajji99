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
                            <a class="nav-link {{ $request == 'cricket'? 'manue-active':'' }}" href="{{ route('cricket')}}">ক্রিকেট</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $request == 'casino'? 'manue-active':'' }}" href="{{ route('casino')}}">ক্যাসিনো</a>
                        </li>
                        <!--========-->
                        <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link {{ $request == 'sloat'? 'manue-active':'' }}" href="{{ route('sloat')}}" id="dropdown01">স্লট গেম</a>
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
                            <a class="nav-link {{ $request == 'tablegames'? 'manue-active':'' }}" href="{{ route('tablegames')}}">টেবিল গেম</a>
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
                            <a class="nav-link {{ $request == 'sportsbook'? 'manue-active':'' }}" href="{{ route('sportsbook')}}">খেলার বই</a>
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
                            <a class="nav-link {{ $request == 'fishing'? 'manue-active':'' }}" href="{{ route('fishing')}}">মাছ ধরা</a>
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
                            <a class="nav-link {{ $request == 'crash'? 'manue-active':'' }}" href="{{ route('crash')}}">ক্র্যাশ</a>
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
                        <li class="nav-item">
                            <a class="nav-link {{ $request == 'promotion'? 'manue-active':'' }}" href="{{ route('promotion')}}">প্রমোশন</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $request == 'vipProfile'? 'manue-active':'' }}" href="{{ route('vipProfile')}}">বেটিং পাস</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">সুপারিশ</a>
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
        <a href="#">
            <img style="width:160px;" src="{{ asset('assets/frontend/img/bajji-img/top-logo.svg') }}" />
        </a>
        <div class="mm-cross-icon">
            <i class="fa fa-times mm-ci"></i>
        </div>
    </div>
    <div class="mm-menu">
        <div class="accordion" id="accordionExample">
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{ route('promotion')}}"><i class="fa fa-venus-double mr-2"></i>প্রমোশন</a>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-venus-double mr-2"></i>রেফারেল প্রোগ্রাম</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('vipProfile')}}"><i class="fa fa-venus-double mr-2"></i>বেটিং পাস <span
                            class="badge badge-success">new</span></a>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-venus-double mr-2"></i>অধিভুক্ত</a>
                </div>
                <div class="menu-link">
                    <span class="ml-2">Games</span>
                </div>
                <div class="menu-link">
                    <a href="{{ route('cricket')}}"><i class="fa fa-venus-double mr-2"></i>ক্রিকেট</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('casino')}}"><i class="fa fa-venus-double mr-2"></i>ক্যাসিনো</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('sloat')}}"><i class="fa fa-venus-double mr-2"></i>স্লট গেম</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('tablegames')}}"><i class="fa fa-venus-double mr-2"></i>টেবিল গেম</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('sportsbook')}}"><i class="fa fa-venus-double mr-2"></i>খেলার বই</a>
                </div>
                <div class="menu-link">
                    <a href="{{ route('crash')}}"><i class="fa fa-venus-double mr-2"></i>ক্র্যাশ <span
                            class="badge badge-success">new</span></a>
                </div>
                <div class="menu-link">
                    <span class="ml-2">Others</span>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-globe mr-2"></i> ভাষা</a>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-question-circle-o mr-2"></i> প্রায়শই জিজ্ঞাসিত প্রশ্নাবল</a>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-commenting-o mr-2"></i>সরাসরি কথোপকথন</a>
                </div>
                <div class="menu-link">
                    <a href="#"><i class="fa fa-download mr-2"></i>ডাউনলোড করুন</a>
                </div>
            </div>
        </div>
    </div>
</div>
