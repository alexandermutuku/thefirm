<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Geosol Consulting | About</title>

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

  <section class="hero is-medium">
      @include('_includes.nav.main_') <!--includes the main navigation -->

    <div class="hero-video">
      <video class="" poster="img/polina.jpg" id="bgvid" playsinline autoplay muted loop>
        <!--
      - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
      WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
      <source src="img/polina.webm" type="video/webm">
      <source src="img/polina.mp4" type="video/mp4">
    </div>
    </video>


      <div class="hero-body">
        <div class="container">

          <div id="polina">
            <vid-content>
              <h1 class="title is-2 has-text-left">
                ABOUT
              </h1>
              <p>filmed by Alexander Wagner 2011
              <p><a href="http://thenewcode.com/777/Create-Fullscreen-HTML5-Page-Background-Video">original article</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta dictum turpis, eu mollis justo gravida ac. Proin non eros blandit, rutrum est a, cursus quam. Nam ultricies, velit ac suscipit vehicula, turpis eros sollicitudin lacus, at convallis mauris magna non justo. Etiam et suscipit elit. Morbi eu ornare nulla, sit amet ornare est. Sed vehicula ipsum a mattis dapibus.</p>
            </vid-content>

            <div class="pause">
              <button>Pause</button>
            </div>
            </div>
            {{-- <h1>Here Goes in the content of the Landing page</h1> --}}
        </div>
    </div><!-- end of hero body -->
  </section> <!--end of section-->

  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="columns is-vcentered">
        <div class="column is-5">
          <figure class="image is-4by3">
            <img src="img/pic_3.png" alt="Description">
          </figure>
        </div>
        <div class="column is-6 is-offset-1 has-text-right p-r-100">
          <h1 class="title is-2 has-text-right">
            Our Mission
          </h1>
          <hr>
          <h2 class="subtitle is-4 m-t-20 is-italic">
            Highly specialised
          </h2>
          <p class="lead ">
            We are highly specialised, we talk, eat, drink and sleep groundwater resources. In short in we are strictly a technical consultancy specialised in groundwater consultancy. We have learned overtime that this specialization has allowed us to focus on “core issues” and clearly understand trends impacting groundwater resources and evolved service offerings that address the shifting needs.
          </p>
          <br>
          {{-- <a href="">
            <div data-wipe="DISCOVER MORE" class="has-text-weight-light">
              <span class="btn">DISCOVER MORE</span>
            </div>
          </a> --}}
        </div>
      </div>
    </div>
  </div><!--end of section-->
</section>


    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-6 is-offset-1 has-text-left p-r-100">
            <h1 class="title is-2 has-text-left">
              Our Vision
            </h1>
            <hr>
            <h2 class="subtitle is-4 m-t-20 is-italic">
              Highly specialised
            </h2>
            <p class="lead ">
              We are highly specialised, we talk, eat, drink and sleep groundwater resources. In short in we are strictly a technical consultancy specialised in groundwater consultancy. We have learned overtime that this specialization has allowed us to focus on “core issues” and clearly understand trends impacting groundwater resources and evolved service offerings that address the shifting needs.
            </p>
            <br>

          </div>

          <div class="column is-6 has-text-left">
            <div class="verticalLine">
            <p class="m-t-30 is-size-3">850 - <h3>Hydrogeological assessments studies</h3></p>
           </div>
          <div class="verticalLine right m-l-100">
             <p class="m-t-30 is-size-3">850K - <h3>successfull drillings</h3></p>
          </div>
          <div class="verticalLine">
            <p class="m-t-30 is-size-3">850K - <h3>permitting</h3></p>
         </div>
         <a href="" class="">
           <div data-wipe="OUR MILESTONES" class="has-text-weight-light m-t-20">
             <span class="btn">OUR MILESTONES</span>
           </div>
         </a>
        </div>

        </div>
      </div>
    </div><!--end of hero-body-->

    <div class="hero-body">
      <div class="has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-6 is-offset-1 has-text-left p-r-100">
            <h1 class="title is-2  has-text-left p-t-20">
              Our Team
            </h1>
            <hr>
            <h2 class="subtitle is-4 m-t-20">
              Solving diverse challenges
            </h2>
            <p class="lead">
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
            {{-- <a href="">
              <div data-wipe="DISCOVER MORE" class="has-text-weight-light">
                <span class="btn">DISCOVER MORE</span>
              </div>
            </a> --}}
          </div>
          <div class="column is-5">
            <div class="columns">
              <div class="column">
                <figure class="image is-0.5by1">
                  <img src="/img/pic_2.png" alt="Description">
                </figure>
                <figure class="image is-0.5by0.5 p-t-10">
                  <img src="/img/pic_1.png" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10">
                  <img src="/img/pic_2.png" alt="Description">
                </figure>
              </div>

              <div class="column">
                <figure class="image is-0.5by0.5">
                  <img src="/img/pic_1.png" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10 m-r-20">
                  <img src="/img/pic_2.png" alt="Description">
                </figure>
                <figure class="image is-2by3 p-t-10">
                  <img src="/img/pic_1.png" alt="Description">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!--end of section -->

    @include('_includes.footer')<!--includes the footer -->

  </body>

  <script>
    export default {
        data() {
            return {
                activeTab: 0
            }
        }
    }
</script>
<script type="text/javascript" src="{{ URL::asset('js/jquery_dev.js')}}"></script>  <!--for dev only -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
</html>
