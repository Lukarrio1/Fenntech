
<nav class="navbar navbar-expand-md">
    <div class="row">
    <div class="col-9 pull-left">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('storage/logo.png') }}" alt="" class="logo"> 
        </a>
    </div>
    <div class="col-3 pt-2 ">
        <a  class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
        </a>
    </div> 
    </div>
       
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <ul class="navbar-nav mr-auto">

                </ul>
                <!-- Right Side Of Navbar -->
             
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                        
                     
                        <li class="pb-1"><a href="/" class="btn btn-white text-success btn-lg ">Home</a></li>&nbsp;
                        <li><a href="/about"  class="btn btn-white text-success btn-lg">About</a></li>&nbsp;
                        <li><a href="/portfolio"  class="btn btn-white text-success btn-lg">Portfolio</a></li>&nbsp;
                        <li><a href="/Jobs"  class="btn btn-white text-success btn-lg">Jobs</a></li>&nbsp;
                        <li class="pb-1"><a href="/Team"  class="btn btn-white text-success btn-lg">Team</a></li>&nbsp;
                        <li class="pb-1"><a href="/contact/create"  class="btn btn-white text-success btn-lg">Contact Us</a></li>&nbsp;
                        <li></li>
                  
                   
                    @guest
                    @else 
                    <li>
                           <a href="/DashBoard"  class="btn btn-white text-success btn-lg ">Dashboard</a>&nbsp;
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
  