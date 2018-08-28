<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting | Services </title>

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!--styles-->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="node_modules/uikit/dist/css/uikit.css">
    </head> <!-- end of the header-->

      @include('_includes.nav.main_') <!--includes the main navigation -->

    <body>
      <section class="hero">
        <div class="hero-body">
          <div class="columns is-vcentered">
            <div class="column is-6 is-offset-1 p-r-100">
              <h1 class="title is-2 has-text-left">
                What we do
              </h1>
              <hr>
              <div class="is-offset-3 m-t-20">
                <h2 class="subtitle is-4 ">
                  Lorem ipsum dolor sit amet,
                </h2>
                <p class="has-text-weight-light">
                  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
              <br>
              <p class="has-text-right has-text-weight-light"></p>
            </div>
            <div class="column is-5">
                    <div class="columns">
                      <div class="column">
                        <figure class="image is-0.5by1">
                          <img src="/img/zungu.jpg" alt="Description">
                        </figure>
                        <figure class="image is-0.5by0.5">
                          <img src="/img/dzanga.jpg" alt="Description">
                        </figure>
                        <figure class="image is-2by3">
                          <img src="/img/pipe_pour.jpg" alt="Description">
                        </figure>
                      </div>

                      <div class="column">
                        <figure class="image is-0.5by1 m-t-20">
                          <img src="/img/mabokoni.jpg" alt="Description">
                        </figure>
                        <figure class="image is-0.5by0.5">
                          <img src="/img/kiranze.jpg" alt="Description">
                        </figure>
                        <figure class="image is-2by3">
                          <img src="/img/mkwakwani.jpg" alt="Description">
                        </figure>
                      </div>
                    </div>
                  </div>
          </div>
        </div> <!-- contents of landing page -->
      </section> <!--end of section-->

      {{-- <section class="hero">
        <div class="hero-body">
          <div class="container has-text-centered">
            <div class="columns is-vcentered">
              <div class="column is-5 is-offset-1 has-text-left">
                <h1 class="title is-2 has-text-left">
                  Our approach
                </h1>
                <hr>
                <div class="is-offset-3 m-t-20">
                  <h2 class="subtitle is-4 m-t-20 has-text-left">
                    Lorem ipsum dolor sit amet,
                  </h2>
                  <p class="has-text-weight-light">
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
              </div>
              <div class="column is-5 is-offset-1 has-text-left m-t-70 m-l-20">
                <div class="is-offset-3">
                  <p class="has-text-weight-light">
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.oluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <br>
                  <a href="">
                    <div data-wipe="DISCOVER MORE" class="has-text-weight-light">
                      <span class="btn">DISCOVER MORE</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--end of hero-body--> --}}

      <section class="section">
        <div class="container">
          <div class="timeline">
            <div class="columns">
              <div class="column">
                <div class="callout left">
                      <div class="content">
                        <h2 class="subtitle is-4">Lorem ipsum dolor sit amet</h2>
                        <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                      </div>
                </div>
              </div>
            </div>
            <div class="callout right">
              <div class="content">
                <h2 class="subtitle is-4">Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
              </div>
            </div>
            <div class="callout left">
              <div class="content">
                <h2 class="subtitle is-4">Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
              </div>
            </div>
            <div class="callout right">
              <div class="content">
                <h2 class="subtitle is-4">Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
              </div>
            </div>
        </div>
      </div>
    </section>


      <section class="hero">
        <div class="hero-body">
          <div class="container has-text-centered">
            <div class="columns is-vcentered">
              <div class="column is-5 is-offset-1 has-text-left">
                <div class="is-offset-3 m-t-20">
                  <button class="accordion">
                     Lorem ipsum dolor sit amet
                    <p class="subtitle">Dolor sit amet</p>
                  </button>
                  <div class="panel p-r-50">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                  <button class="accordion">
                     Lorem ipsum dolor sit amet
                    <p class="subtitle">Dolor sit amet</p>
                  </button>
                  <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                  <button class="accordion">
                     Lorem ipsum dolor sit amet
                    <p class="subtitle">Dolor sit amet</p>
                  </button>
                  <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
              <div class="column is-5 is-offset-1 has-text-left m-t-80 m-l-20">
              <div class="is-offset-3 m-t-20">
                <button class="accordion">
                   Lorem ipsum dolor sit amet
                  <p class="subtitle">Dolor sit amet</p>
                </button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">
                   Lorem ipsum dolor sit amet
                  <p class="subtitle">Dolor sit amet</p>
                </button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">
                   Lorem ipsum dolor sit amet
                  <p class="subtitle">Dolor sit amet</p>
                </button>
                <div class="panel">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section><!--end of hero-body-->

      <section class="hero">
        <div class="hero-body">
          <div class="container has-text-centered">
        <div class="">
          <h1 class="title is-2 has-text-centered">
            Our Instagram
          </h1>
          <hr>
        </div>

          <div class="slider js_slider m-t-30">
            <div class="frame js_frame">
              <ul class="slides js_slides">
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
                <li class="js_slide"></li>
              </ul>
            </div>
            {{-- <span class="js_prev">&lt;</span>
            <span class="js_next">&gt;</span>
            <ul class="slider_navigation_dots"></ul> --}}
          </div>
        </div>
        </div>
      </section><!--end of hero-body-->
    </body>

      @include('_includes.footer')<!--includes the footer -->


    <script type="text/javascript" src="{{ URL::asset('js/jquery_dev.js')}}"></script>  <!--for dev only -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/lory.js/2.4.4/lory.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
</html>
