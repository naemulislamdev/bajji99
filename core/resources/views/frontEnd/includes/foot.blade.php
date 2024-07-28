<a href="#" title="{{ __('frontend.toTop') }}" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('assets/frontend/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/jquery.flexslider.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/custom.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ URL::asset('assets/defaults/toastr/toastr.min.js') }}"></script>
@if (Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
    @endif
    @if (Session::has('error'))
    <script>
        toastr.error("{{ Session::get('error') }}");
    </script>
    @endif
    @if (Session::has('info'))
    <script>
        toastr.info("{{ Session::get('info') }}");
    </script>
    @endif

<script>
      $(document).ready(function () {
        $(".navbar-light .dmenu").hover(
          function () {
            $(this).find(".sm-menu").first().stop(true, true).slideDown(150);
          },
          function () {
            $(this).find(".sm-menu").first().stop(true, true).slideUp(105);
          }
        );
      });

      $(document).ready(function () {
        $(".megamenu").on("click", function (e) {
          e.stopPropagation();
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        /*mobile menu*/
        $(".menu-icon").on("click", function () {
          $(".mobile-menu").toggleClass("mobile-menu-active");
        });
        $(".mm-ci").on("click", function () {
          $(".mobile-menu").toggleClass("mobile-menu-active");
        });
      });
    </script>


