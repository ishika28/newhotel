<!DOCTYPE html>
<html lang="en">

<head>
  <!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>@yield('title')</title>
	<meta name="description"
		content="Located in Nepālganj, Hotel Sneha Clarks Inn features a casino. Among the various facilities of this property are an outdoor swimming pool and a fitness center. The hotel has a garden and provides a children's playground. Hotel Sneha Clarks Inn offers a terrace. The area is popular for cycling, and bike hire is available at the accommodations. There is an in-house bar and guests can also make use of the business area. Staff at the 24-hour front desk can help guests with any queries that they may have.">

	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
	<!-- include the site stylesheets -->
	
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="{{asset('admin/css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
  <link href="{{asset('admin/demo/demo.css')}}" rel="stylesheet" /> 
 
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="white">
      <div class="logo">
        <img src="{{asset('images/logo.png')}}" class="img-responsive" width="200px" style="padding: 10px;margin-left: 25px;">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{Request::is('/admin-sneha/home','admin-sneha')?'active':''}}">
            <a class="nav-link" href="{{route('admin.welcome')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="{{Request::is('/admin-sneha/rooms','admin-sneha/rooms')?'active':''}}">
            <a class="nav-link" href="{{route('admin.rooms')}}">
              <i class="material-icons">supervisor_account</i>
              <p>Rooms</p>
            </a>
          </li>

          <li class="{{Request::is('/admin-sneha/rooms/bookedrooms','admin-sneha/rooms/bookedrooms')?'active':''}}">
            <a class="nav-link" href="{{route('admin.bookedrooms')}}">
              <i class="material-icons">supervisor_account</i>
              <p>Booked Rooms</p>
            </a>
          </li>

         <!--  <li class="{{Request::is('/admin-sneha/rooms/availablerooms','admin-sneha/rooms/availablerooms')?'active':''}}">
            <a class="nav-link" href="{{route('admin.availablerooms')}}">
              <i class="material-icons">supervisor_account</i>
              <p>Available Rooms</p>
            </a>
          </li> -->

          <!-- <li class="nav-item ">
            <a class="nav-link" href="./profits.html">
              <i class="material-icons">attach_money</i>
              <p>Profits</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./kpis.html">
              <i class="material-icons">poll</i>
              <p>KPIs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./promotions.html">
              <i class="material-icons">publish</i>
              <p>Promotions</p>
            </a>
          </li> -->

          <li class="nav-item ">
            <a class="nav-link" href="./profile.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" style="padding-right: 20px;">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <strong>
                <p id="username" style="text-transform: uppercase;color:#e5640e;font-size: 25px;padding-top: 10px;"></p>
              </strong>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="profile.html">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content loginModal">
            <div class="modal-body" id="error-msg">
              <b>
                <p id="err-msg" style="color: #fff; text-align: center;"></p>
              </b>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-body" style="background: #fff;color: #000">
              Are you sure want to logout?<br />
              <div style="float: right;">
                <button id="no" type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <button id="logout-yes" type="button" class="btn btn-danger">Yes</button>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- End Navbar -->
      <div class="content" style="background:#fff;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              @yield('content-section')
            </div>
          </div>


        </div>
      </div>


      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                 Link 1
                </a>
              </li>
              <li>
                <a href="#">
                  Link 2
                </a>
              </li>
              <li>
                <a href="#">
                  Link 3
                </a>
              </li>
              <li>
                <a href="#">
                  Licenses
                </a>
              </li>
              <li>
                <a href="#">
                  Privacy Policy
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>,<a href="#" target="_blank">Hotel Sneha-Admin Panel, Powered By:Ishu</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
 
  <script src="{{asset('admin/js/core/popper.min.js')}}"></script>
  <script src="{{asset('admin/js/core/bootstrap-material-design.min.js')}}"></script>
  
 
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('admin/js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  
 @yield('javascript')
 
</body>

</html>