
<div class="thetop"> </div>
  <nav class="navbar is-fixed-top">
    <div class="navbar navbar-menu is-hidden-desktop is-fixed-top thetop" id="navMenu">

      {{-- <div class="navbar-brand navbar-item m-l-100 m-t-10">
          <a href=""><img src="/img/logo.jpg" alt="LOGO" width="112" height="112"></a>
      </div>  --}} <!--end navbar brand is hidden for the logo-->

      <div class="container is-fullscreen">
            <navbar-item class="vertical m-l-100">
              <ul>
                <li><a href="/">HOME</a><hr></li>
                <li><a href="{{route('service')}}">WHAT WE DO</a><hr></li>
                <li><a href="">OUR STORY</a>
                  <hr>
                    <ul>
                      <div class=""><!--start of line flow down-->
                        <div class="" id="grows"></div>
                      </div> <!--end of line flow down-->

                      <div class="m-l-20">
                          <li><a href="{{route('about')}}">ABOUT</a></li>
                          <li><a href="{{route('blog')}}">BLOG</a></li>
                          <li><a href="{{route('project')}}">MILESTONES</a></li>
                      </div>
                    </ul>
                </li><!--end of our story menu items-->
                <li><a href="{{route('contact')}}">CONTACT</a><hr></li>
              </ul>
            </navbar-item>

            <navbar-item class="vertical linegrow">
              <ul>
                <li class='icon social fb'><i class='fa fa-facebook'></i></li>
                <li class='icon social in'><i class='fa fa-instagram'></i></li>
                <li class='icon social tw'><i class='fa fa-twitter'></i></li>
                <li class='icon social in'><i class='fa fa-linkedin'></i></li>
              <ul>
            </navbar-item> <!-- end of social media icons -->
          </div> <!--end of fullscreen nav contents-->

      <div class="fullscreen_nav_footer m-t-100 m-l-100 m-r-100">
            <hr>
            <div class="secondary-nav has-text-weight-light has-text-white m-t-20">
              <div class="columns">
                <div class="column">
                  <div class="flex-center position-ref full-height" id="app">
                      @if (Route::has('login'))
                          <ul class="">
                              @if (Auth::check())
                                  <li><a href="{{ url('/home') }}">HOME</a></li>
                              @else
                                  <li><a href="{{ url('/login') }}">LOGIN</a></li>
                                  <li><a href="{{ url('/register') }}">REGISTER</a></li>
                              @endif
                          </ul>
                      @endif
                  </div>
                </div>
                <div class="column has-text-right">
                  <li><a href="#">Copyright © 2018 Geosol Consulting</a></li>
                </div>
              </div>
            </div>
          </div> <!--end fullscreen nav footer-->
    </div><!--end fullscreen nav -->

    <div class="navbar navbar-menu topper m-t-15 m-b-15">
        <div class="navbar-brand navbar-item m-l-100">
              {{-- <div class="logo"><a href="/"><img src="img/logo.jpg" alt="LOGO"></a></div> --}}
        </div> <!--end navbar display the logo alone-->

        <div class="navbar-end navbar-burger navbar-item m-r-100 menu" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
        </div> <!-- end navburger-->
    </div><!-- end top fixed navbar-->
</nav> <!--end of nav -->
