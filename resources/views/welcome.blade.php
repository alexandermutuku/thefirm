<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geosol Consulting | Home </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">

  </head> <!-- end of the header-->

  @include('_includes.nav.main_') <!--includes the main navigation -->

  <body>
    <section class="hero is-fullheight">
          <div class="hero-land has-text-centered">
              <div class="columns">
                <div class="column is-3">

                </div>
                <div class="column is-5 has-text-centered">
                  <span class="title is-2  has-text-centered p-t-20">
                    Consectetur adipiscing elit
                  </span>
                  <h2 class="is-4 m-t-20">
                    Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                  </h2>
                  <br>
                  <a href="">
                    <div data-wipe="DISCOVER MORE" class="has-text-weight-light m-t-20">
                      <span class="btn">DISCOVER MORE</span>
                    </div>
                  </a>
                </div>
                <div class="column is-3">

                </div>
              </div>
          </div>

        {{-- <div class="container_item landing-page-container">
          <div class="container-wrapper">
            <p class="coords"> N 49 416 35.99 W 0 42 11.30</p>
            <div class="ecllipse-container">
              <h2 class="greeting">explore</h2>
              <div class="ellipse ellipse_outer--thin">
                <div class="ellipse ellipse_orbit"></div>
              </div>
              <div class="ellipse ellipse_outer--thick"></div> <!--rotating ellipses -->

            </div>
          </div>
        </div> --}}
    </section>




    <section class="hero">
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="columns is-vcentered">
            <div class="column is-5">
              <figure class="image is-5by4">
                <img src="/img/drill_rig_2.jpg" alt="Description">
              </figure>
            </div>

            <div class="column is-6 is-offset-1 has-text-right p-r-100">
              <h1 class="title is-2 has-text-right">
                What sets us apart ?
              </h1>
              <hr>
              <h2 class="subtitle is-4 m-t-20">
                Highly specialised
              </h2>
              <p class="has-text-weight-light">
                We are highly specialised, we talk, eat, drink and sleep groundwater resources. In short in we are strictly a technical consultancy specialised in groundwater consultancy. We have learned overtime that this specialization has allowed us to focus on “core issues” and clearly understand trends impacting groundwater resources and evolved service offerings that address the shifting needs.
              </p>
              <br>
              <a href="">
                <div data-wipe="DISCOVER MORE" class="has-text-weight-light m-t-20">
                  <span class="btn">DISCOVER MORE</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!--end of section-->

    <section class="hero">
      <div class="hero-body">
          <div class="columns is-vcentered">
            <div class="column is-6 is-offset-1 has-text-left p-r-100">
              <h1 class="title is-2  has-text-left p-t-20">
                A diverse journey
              </h1>
              <hr>
              <h2 class="subtitle is-4 m-t-20">
                Solving diverse challenges
              </h2>
              <p class="has-text-weight-light m-t-20">
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <br>
              <a href="">
                <div data-wipe="DISCOVER MORE" class="has-text-weight-light m-t-20">
                  <span class="btn">DISCOVER MORE</span>
                </div>
              </a>
            </div>
            <div class="column is-5">
              <div class="columns">
                <div class="column">
                  <figure class="image is-0.5by1">
                    <img src="/img/drill_rig.jpg" alt="Description">
                  </figure>
                  <figure class="image is-0.5by0.5 p-t-10">
                    <img src="/img/camels_2.jpg" alt="Description">
                  </figure>
                  <figure class="image is-2by3 p-t-10">
                    <img src="/img/ngeeni.jpg" alt="Description">
                  </figure>
                </div>

                <div class="column">
                  <figure class="image is-0.5by0.5 m-t-20">
                    <img src="/img/survey_iqra.jpg" alt="Description">
                  </figure>
                  <figure class="image is-0.5by1 p-t-10">
                    <img src="/img/camels.jpg" alt="Description">
                  </figure>
                  <figure class="image is-2by3 p-t-10">
                    <img src="/img/drill_rig_2.jpg" alt="Description">
                  </figure>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section> <!--end of section -->

    <section class="hero medium-cover">
      <div class="hero-body">

      </div>
    </section> <!--end of section -->

    <section class="hero">
      <div class="hero-body">
        <div class="container">
          <div class="jounal has-text-left m-b-30">
            <h1 class="">
              Our journal
            </h1>
            <hr>
          </div>

          <div class="columns">
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-0.5by0.5 p-t-10">
                    <img src="/img/camels_2.jpg" alt="Description">
                  </figure>
                </div>

                <div class="card-content">
                  <div class="content">
                    <time class="has-text-weight-light is-small" datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                    <h4 class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus.</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-0.5by1 p-t-10">
                    <img src="/img/camels.jpg" alt="Description">
                  </figure>
                </div>

                <div class="card-content">
                  <div class="content">
                    <time class="has-text-weight-light is-small" datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                    <h4 class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus.</h4>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-image">
                  <figure class="image is-0.5by1 p-t-10">
                    <img src="/img/camels.jpg" alt="Description">
                  </figure>
                </div>

                <div class="card-content">
                  <div class="content">
                    <time class="has-text-weight-light is-small" datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                    <h4 class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus.</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-2by3 p-t-10">
                    <img src="/img/drill_rig_2.jpg" alt="Description">
                  </figure>
                </div>

                <div class="card-content">
                  <div class="content">
                    <time class="has-text-weight-light is-small" datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                    <h4 class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus.</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          {{-- <div id="container"></div> <!--loads the blog posts--> --}}
            <a><div class="has-text-weight-light"id="showMoreTrigger">LOAD MORE</div></a>
        </div>
      </div>
    </section><!--end of section -->
  </body>

  @include('_includes.footer')<!--includes the footer -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery_dev.js')}}"></script>  <!--for dev only -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
</html>
