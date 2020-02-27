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

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
	<!-- include the site stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('css/colors.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/animations.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('css/datepicker.css')}}" type="text/css" media="all">
	<!-- Bootstrap Dropdown Hover CSS -->
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('css/bootstrap-dropdownhover.min.css')}}" type="text/css" media="all">
	<!-- Fonts CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400italic,700" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700"
		type="text/css">
	<!-- Range slider CSS -->
	<link rel="stylesheet prefetch" href="{{asset('css/jquery-ui.css')}}" type="text/css">
	<!-- flex slider CSS -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css">
</head>

<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<strong class="logo"><a href="index.html"><img src="{{asset('images/logo.png')}}" alt="Hotel"></a></strong>
						<!-- main navigation -->
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									data-target="#bs-example-navbar-collapse-1"
									aria-expanded="false"><span></span></button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-left">
									<li class="{{Request::is('/','/')?'active':''}}"><a href="{{route('user.home')}}">HOME</a></li>
          <li class="{{Request::is('/about','about')?'active':''}}"><a href="{{route('user.about')}}">ABOUT</a></li>
									  <li class="{{Request::is('/rooms','rooms')?'active':''}}"><a href="{{route('user.rooms')}}">ROOMS</a></li>
									<!-- <li class="active dropdown">
										<a href="rooms.html" class="dropdown-toggle disable" data-hover="dropdown">rooms</a>
										<ul class="dropdown-menu">
											<li><a href="room-detail.html">Room details</a></li>
                                            <li><a href="rooms2.html">Rooms 2</a></li>
                                            <li><a href="payment.html">Payment</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
										</ul>
									</li> -->
									<li class="{{Request::is('/conference','conference')?'active':''}}"><a href="{{route('user.conference')}}">CONFERENCE</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li class="{{Request::is('/wedding','wedding')?'active':''}}"><a href="{{route('user.wedding')}}">WEDDING</a></li>
									<li class="{{Request::is('/restaurant','restaurant')?'active':''}}"><a href="{{route('user.restaurant')}}">RESTAURANT</a></li>
									<li class="{{Request::is('/attractions','attractions')?'active':''}}"><a href="{{route('user.attractions')}}">ATTRACTIONS</a></li>
									 <li class="{{Request::is('/contact','contact')?'active':''}}"><a href="{{route('user.contact')}}">CONTACT</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		 @yield('content-section')


		 <!-- footer of the page -->
		<div class="b-container">
			
			<div class="footer-nav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="#wrapper" class="go-top">
								<span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
							</a>
							<strong class="logo"><a href="index.html"><img src="{{asset('images/f-logo.png')}}"
										alt="Hotel"></a></strong>
							<!-- footer navigation -->
							<nav class="f-nav">
								<ul class="nav navbar-nav navbar-left">
									<li><a href="index.html">HOME</a></li>
									<li><a href="aboutus.html">ABOUT US</a></li>
									<li><a href="rooms2.html">rooms</a></li>
									<li><a href="conference-room.html">conference</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="wedding-hall.html">wedding</a></li>
									<li><a href="restaurant.html">restaurant</a></li>
									<li><a href="blog.html">Attractions</a></li>
									<li><a href="contact.html">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p>&copy; <a href="#" class="link">2019. Hotel Sneha Pvt. Ltd</a>. Powered by <a
									href="#">Adspace</a></p>
						</div>
						<div class="col-sm-6">
							<ul class="list-inline social-networks">

								<li><a href="https://www.facebook.com/pages/Hotel-Sneha/1033114743491914"><span
											class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-youtube"></span></a></li>
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!-- include jQuery library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Range Slider JavaScript -->
	<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/range-slider.js')}}"></script>
	<!-- Same Height JavaScript -->
	<script type="text/javascript" src="{{asset('js/same-height.js')}}"></script>
	<!-- include custom JavaScript -->
	<script type="text/javascript" src="{{asset('js/jquery.main.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/animations.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.plugin.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.countdown.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/timber.master.min.js')}}"></script>
	<!-- Bootstrap Dropdown Hover JS -->
	<script type="text/javascript" src="{{asset('js/bootstrap-dropdownhover.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.js')}}"></script>
	<script type="text/javascript" defer src="{{asset('js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/myscript.js')}}"></script>
	 @yield('javascript')
</body>

</html>