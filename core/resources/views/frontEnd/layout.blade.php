<!DOCTYPE html>
<html lang="{{ @Helper::currentLanguage()->code }}" dir="{{ @Helper::currentLanguage()->direction }}">
<head>
    @include('frontEnd.includes.head')
</head>
<body>
<div class="top-section py-3">
      <div class="container">
        <div class="top-bar d-flex justify-content-between">
          <i class="fa fa-bars menu-icon"></i>
          <div class="top-left">
            <a href="#"><img src="{{asset('assets/frontend/img/bajji-img/top-logo.svg')}}" alt="" /></a>
          </div>
          <div class="top-right d-flex">
            <div class="top-bar-right-btn">
              <a href="#" class="btn btn-warning mr-2">প্রবেশ করুন</a>
              <a href="#" class="btn btn-primary mr-2">এখনি যোগদিন</a>
            </div>
            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle p-1"
                type="button"
                data-toggle="modal"
                data-target="#topRightLanguModal"
              >
                <img class="top-right-img" src="{{asset('assets/frontend/img/bajji-img/bdt.svg')}}" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->

    <!--Language Modal -->
    <div
      class="modal fade"
      id="topRightLanguModal"
      tabindex="-1"
      data-backdrop="static"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Currency And Language
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
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
</div>
@include('frontEnd.includes.foot')
@yield('footerInclude')

@if(Helper::GeneralSiteSettings("style_preload"))
    <div id="preloader"></div>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(window).load(function () {
                $('#preloader').fadeOut('slow', function () {
                    // $(this).remove();
                });
            });
        });
    </script>
@endif
@if(Helper::GeneralSiteSettings("style_header"))
    <script type="text/javascript">
        window.onscroll = function () {
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
        $(document).ready(function(){
            let announcementBox = $("#announce_slider").width();
            let announcementW = $("#announce_slider .context").width();
            var scrollingTime = 25000;
            function start_scroll(){
                $("#announce_slider .context").animate({height:0}, 0);
                $("#announce_slider .context").animate({left:announcementBox}, 0);
                $("#announce_slider .context").animate({height:300}, 10);
                $("#announce_slider .context").animate({left:-announcementW}, scrollingTime);
            }
            start_scroll();
            setInterval(() => {
                start_scroll();
            }, scrollingTime);
        });
    </script>
</body>
</html>
