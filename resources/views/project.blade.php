<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting | Blog</title>

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!--styles-->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="node_modules/uikit/dist/css/uikit.css">
      <link rel="stylesheet" href=""/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head> <!-- end of the header-->
    <body>
    <section class="hero is-transparent is-fullheight">

      @include('_includes.nav.main_') <!--includes the main navigation -->

      <div class="hero-body">
        <div class="container fullheight">
          <div class="container has-text-left">
              <div class="columns is-vcentered">
                <div class="column is-6 is-offset-1 has-text-left p-r-100">
                  <h1 class="title is-2 has-text-left">
                    The Company
                  </h1>
                  <hr>
                  <div class="is-offset-3 p-l-50">
                    <h2 class="subtitle is-4 m-t-20">
                      Lorem ipsum dolor sit amet,
                    </h2>
                    <p class="lead">
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
                        <img src="img/pic_3.png" alt="Description">
                      </figure>
                      <figure class="image is-0.5by0.5">
                        <img src="img/pic_2.png" alt="Description">
                      </figure>
                      <figure class="image is-2by3">
                        <img src="img/pic_1.png" alt="Description">
                      </figure>
                    </div>

                    <div class="column">
                      <figure class="image is-2by1">
                        <img src="img/pic_1.png" alt="Description">
                      </figure>
                      <figure class="image is-2by3">
                        <img src="img/pic_1.png" alt="Description">
                      </figure>
                      <figure class="image is-2by3">
                        <img src="img/pic_2.png" alt="Description">
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            {{-- <h1>Here Goes in the content of the Landing page</h1> --}}
          </div> <!--try using the hero page styles -->
        </div>
      </div> <!-- contents of landing page -->
    </section> <!--end of section-->

    <section class="section">
      <div class="container">
      <div class="timeline">
    <div class="columns">
      <div class="column">
        <div class="callout left">
              <div class="content">
                <h2>2017</h2>
                <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
              </div>
        </div>
      </div>
      {{-- <div class="column">
        <figure class="image is-0.5by1">
          <img src="/img/pic_2.png" alt="Description">
        </figure>

      </div> --}}
    </div>



        <div class="callout right">
          <div class="content">
            <h2>2016</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout left">
          <div class="content">
            <h2>2015</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout right">
          <div class="content">
            <h2>2012</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout left">
          <div class="content">
            <h2>2011</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
        <div class="callout right">
          <div class="content">
            <h2>2007</h2>
            <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="hero-body">
    <div class="container has-text-centered">
      {{-- <h1 class="title is-2 has-text-right">
        Title goes here
      </h1>
      <hr> --}}
      <div class="columns is-vcentered">
        <div class="column is-4">
          <figure class="image is-0.5by1">
            <img src="/img/pic_2.png" alt="Description">
          </figure>
        </div>

        <div class="column is-4">
          <figure class="image is-0.5by1">
            <img src="/img/pic_2.png" alt="Description">
          </figure>
        </div>

        <div class="column is-4">
          <figure class="image is-0.5by1">
            <img src="/img/pic_2.png" alt="Description">
          </figure>
        </div>
      </div>
    </div>
  </section><!--end of hero-body-->

    @include('_includes.footer')<!--includes the footer -->

  </body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.js')}}"></script>  <!--for dev only -->
</html>
