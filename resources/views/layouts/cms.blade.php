<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('js/Style.js') }}">
    <title>FennTechCMS | @yield('title')</title>
</head>
<body class="auth_user_color">
    <nav class="cms-nav">
        <span class="open-slide">
          <a href="#" onclick="openSlideMenu()">
            <svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
            </svg>
          </a>
        </span>
        <ul class="cms-nav">   
            <li><a href="{{ url('/') }}"><span class="text-primary">Fenn</span ><span class="text-success">Tech</span></a></li>   
         <div class="cms-nav-nav"> 
          <li> <a href="{{ url('contact/') }}" >Inbox
    </a></li>
            <li><a href="{{ url('Viewall/All_job') }}">Jobs
            </a></li>
            <li><a href="{{ url('Viewall/All_team') }}">Team Members
            </a></li>
            <li><a href="/All_testimonials"> Testimonials
            </a></li>
            <li><a href="{{ url('Viewall/All_slide') }}">Carousel slides
            </a></li>
            <li><a href="{{ url('portfolio/create') }}">Add Portfolio
            </a></li>
            <li class="">@yield('nav_dy')</li>
            <li> <a class="" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
              </a>
            </li>
          </div>
        </ul>
      </nav>
  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="{{ url('Viewall/All_job') }}" >View all Jobs
    </a>
    <a href="{{ url('Viewall/All_team') }}" >View all Team members
    </a>
    <a href="/All_testimonials" >View all testimonials
    </a>
    <a href="{{ url('Viewall/All_slide') }}" >View all Carousel slides
    </a>
    <a href="{{ url('contact/') }}" >View Messages
    </a>
    <a href="{{ url('portfolio/create') }}" >Add Portfolio
    </a>
    <div class="pl-4">@yield('nav_dy')</div>
      <a class="" href="{{ route('logout') }}"
      onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
      </form>
    </a>
  </div>
   <div class="row">
     <div class="col-lg-12 text-center pt-2">
       @yield('counter')
     </div>
   </div>
  <div id="main">
    <div class="msg-atm">
    @include('inc.message')
  </div>
    <div class="cms-atm">
    @yield('content')
  </div>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

<script>
        CKEDITOR.replace( 'article-ckeditor' );
     </script>
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>

</body>
</html>