@extends ('layouts.main')
@section('title',"Hotel Sneha")
@section('content-section')

<!-- carousel -->
		<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active slider">
					<div class="description">
						<div class="container">
							<div class="row text-center">
								<div class="col-xs-12">
									<h1><em><strong>reserve a room for</strong></em><br class="hidden-xs"> <span>family
											vacation</span></h1>
								</div>
							</div>
						</div>
					</div>
					<figure class="slide_img">
						<img src="{{asset('images/slide1.jpg')}}" alt="image description">
					</figure>
				</div>
				<div class="item slider">
					<div class="description">
						<div class="container">
							<div class="row text-center">
								<div class="col-xs-12">
									<h1><em><strong>reserve a room for</strong></em><br class="hidden-xs"> <span>relax
											yourself</span></h1>
								</div>
							</div>
						</div>
					</div>
					<img src="{{asset('images/slide2.jpg')}}" alt="image description" class="slide_img">
				</div>
				<div class="item slider">
					<div class="description">
						<div class="container">
							<div class="row text-center">
								<div class="col-xs-12">
									<h1><em><strong>reserve a room for</strong></em><br class="hidden-xs"> <span>relax
											yourself</span></h1>
								</div>
							</div>
						</div>
					</div>
					<img src="{{asset('images/slide3.jpg')}}" alt="image description" class="slide_img img-responsive">
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev"></a>
			<a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next"></a>
		</div>
		<!-- reservation-bar -->
		<div class="reservation-bar">
			<div class="container">
				<div class="row">
					<form method="POST" action="{{route('room.searchroom.submit.user')}}" name="searchroomForm">
						  {{ csrf_field() }}
						<div class="col-md-6 col-sm-12">
							<div class="row">
								<div class="col-sm-6">
									 <div class="form-group {{ $errors->has('checked_in_date_search') ? ' has-error' : '' }}">
                            <label for="checked_in_date_search" class="col-md-12 control-label">Arrive Date</label>

                            <div class="col-md-12">
                                <input id="checked_in_date_search" type="date" class="form-control" name="checked_in_date_search"   required>

                                @if ($errors->has('checked_in_date_search'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('checked_in_date_search') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
								</div>
								<div class="col-sm-6">
									 <div class="form-group {{ $errors->has('checked_out_date_search') ? ' has-error' : '' }}">
                            <label for="checked_out_date_search" class="col-md-12 control-label">Departure Date</label>

                            <div class="col-md-12">
                                <input id="checked_out_date_search" type="date" class="form-control" name="checked_out_date_search"  required>

                                @if ($errors->has('checked_out_date_search'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('checked_out_date_search') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="row">
								<!-- <div class="col-sm-4">
									<div class="form-group">
										<div class="fake-select">
											<select>
												<option value="Adult" selected>Adult</option>
												<option>Children</option>
												<option>Option3</option>
											</select>
										</div>
									</div>
								</div> -->
								<!-- <div class="col-sm-4">
									<div class="form-group">
										<div class="fake-select">
											<select>
												<option value="Room" selected>Room</option>
												<option>Option2</option>
												<option>Option3</option>
											</select>
										</div>
									</div>
								</div> -->
								<div class="col-sm-4">
									<input type="submit" class="btn btn-default" value="check availability">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- about -->
			<section class="about container b-padding">
				<div class="row">
					<header class="header col-xs-12 g-padding">
						<h1 class="header-title">HOTEL SNEHA</h1>
					</header>
				</div>
				<div class="row">
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="300">
						<div class="box">
							<div class="icon ico-luxury"></div>
							<h2>Luxury</h2>
							<p>For further entertainment to our Non Nepali guest, we have a MINI CASINO to venture your
								luck at the "Roulette/Baccarat/Black Jack/Slot machine and of course to watch a sizzling
								dance by the professional group.</p>
						</div>
					</div>
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="600">
						<div class="box">
							<div class="icon ico-services"></div>
							<h2>Great services</h2>
							<p>We are known for our warmth and homely care. All our guests are treated as V.I.P.s our
								staff is also efficient in handling large groups. We invite your to visit us and
								experience the Wild West Nepal effect.</p>
						</div>
					</div>
					<div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="900">
						<div class="box">
							<div class="icon ico-reservation"></div>
							<h2>Online reservation</h2>
							<p>Coming soon...</p>
						</div>
					</div>
				</div>
			</section>
			<!-- Our room -->
			<section class="our-room">
				<div class="image-frame"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 text-block pull-right animate" data-anim-type="fadeInRight"
							data-anim-delay="300">
							<h1>Facilites</h1>
							<p>Located in Nepālganj, Hotel Sneha Clarks Inn features a casino. Among the various
								facilities of this property are an outdoor swimming pool and a fitness center. The hotel
								has a garden and provides a children's playground.</p>
							<p>Hotel Sneha Clarks Inn offers a terrace. The area is popular for cycling, and bike hire
								is available at the accommodations. There is an in-house bar and guests can also make
								use of the business area. Staff at the 24-hour front desk can help guests with any
								queries that they may have.</p>
							<div class="row">
								<ul class="list-unstyled list col-sm-6">
									<li>Conference halls</li>
									<li>Fitness center/Steam bath</li>
									<li>Lobby/Lugguage strorage</li>
									<li>Swimming Pool</li>
									<li>Mini casino</li>
								</ul>
								<ul class="list-unstyled list col-sm-6">
									<li>Travel service</li>
									<li>Laundry service</li>
									<li>Sprawling garden</li>
									<li>Open Air Party Lawn area</li>
									<li>Restaurants and Bar</li>

								</ul>
							</div>
							<ul class="list-inline services-list">
								<li><span class="icon ico-breakfast"></span>Free<br>breackfast</li>
								<li><span class="icon ico-wifi"></span>free wifi</li>
								<li><span class="icon ico-spa"></span>Spa &<br> Fitness</li>
								<li><span class="icon ico-downtown"></span>Pool</li>
								<li><span class="icon ico-mp"></span>Plaground</li>
								<li><span class="icon ico-parking"></span>free<br> parking</li>
							</ul>
							<a href="aboutus.html" class="btn btn-default">Read More</a>
						</div>
					</div>
				</div>
			</section>
			<!-- restaurant -->
			<section class="restaurant">
				<div class="container add-padding">
					<div class="row">
						<div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="300">
							<div class="text-box">
								<h1>our restaurant</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
									irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
									pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
									deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
									sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
									ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
								</p>
								<a href="#" class="btn btn-default">Book Now</a>
							</div>
						</div>
						<div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="600">
							<div class="image-frame"><img src="{{asset('images/image-02.jpg')}}" alt="image description"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- Fun facts -->
			<section class="fun-facts">
				<div class="container">
					<div class="row cta-block">
						<div class="cta-block__text">
							<h2>Find us on Facebook</h2>
							<h3>We update regularly on Facebook and are very responsive to your messages. Like us today!
							</h3>
						</div>
						<div class="cta-block__button">
							<a class="cta-button" href="https://www.facebook.com/pages/Hotel-Sneha/1033114743491914"
								target="_blank">
								Facebook Page
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- our news -->
			<section class="news container b-padding">
				<div class="row">
					<header class="header col-xs-12 g-padding">
						<h1>ROOMS</h1>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<!-- carousel -->
						<div id="carousel-example-generic2" class="carousel slide news" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-8 col-xs-12 col">
										<div class="image-holder">
											<a href="images/room4.jpg" class="fancybox">
												<img src="{{asset('images/room4.jpg')}}" alt="image description">
											</a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Maharaja Suite</h2>
											<p>Description Coming soon...</p>
											<a href="rooms2.html" class="btn btn-default">read more</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-8 col-xs-12 col">
										<div class="image-holder"><a href="images/room4.jpg" class="fancybox">
												<img src="{{asset('images/room4.jpg')}}" alt="image description">
											</a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Presidential Suite</h2>
											<p>Description Coming soon...</p>
											<a href="rooms2.html" class="btn btn-default">read more</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-8 col-xs-12 col">
										<div class="image-holder">
											<a href="images/room4.jpg" class="fancybox">
												<img src="{{asset('images/room4.jpg')}}" alt="image description">
											</a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Premium Double</h2>
											<p>DescriptionComing soon...</p>
											<a href="rooms2.html" class="btn btn-default">read more</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-8 col-xs-12 col">
										<div class="image-holder">
											<a href="images/room4.jpg" class="fancybox">
												<img src="{{asset('images/room4.jpg')}}" alt="image description">
											</a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Premium Single</h2>
											<p>Description Coming soon...</p>
											<a href="rooms2.html" class="btn btn-default">read more</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-8 col-xs-12 col">
										<div class="image-holder">
											<a href="images/room4.jpg" class="fancybox">
												<img src="{{asset('images/room4.jpg')}}" alt="image description">
											</a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Standard Double</h2>
											<p>Description Coming soon...</p>
											<a href="rooms2.html" class="btn btn-default">read more</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-8 col-xs-12 col">
										<div class="image-holder">
											<a href="images/room4.jpg" class="fancybox">
												<img src="{{asset('images/room4.jpg')}}" alt="image description">
											</a>
										</div>
									</div>
									<div class="col-sm-4 col">
										<div class="carousel-caption">
											<h2>Standard Single</h2>
											<p>Description Coming soon...</p>
											<a href="rooms2.html" class="btn btn-default">read more</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Indicators -->
							<div class="indicators col-sm-4">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic2" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic2" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic2" data-slide-to="3"></li>
									<li data-target="#carousel-example-generic2" data-slide-to="4"></li>
									<li data-target="#carousel-example-generic2" data-slide-to="5"></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		@endsection

	@section('javascript')

 
  <script>
    $(document).ready(function () {
     
      var today = new Date();
    var dd = today.getDate() ;
    var dd2=dd+1;
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }

    var minDate = yyyy + '-' + mm + '-' + dd;
    var minDate2=yyyy + '-' + mm + '-' + dd2;
    document.getElementById("checked_out_date_search").setAttribute("min", minDate2);
    document.getElementById("checked_in_date_search").setAttribute("min", minDate);
    //document.getElementById("checked_out_date").setAttribute("min", minDate2);
    //document.getElementById("checked_in_date").setAttribute("min", minDate);
  
    });
  </script>
  <script>
    $('#searchroomform').on('click',function () {
      date1 = new Date($('#checked_in_date_search').val()).toISOString().split('T')[0];
      date2= new Date($('#checked_out_date_search').val()).toISOString().split('T')[0];
       localStorage.setItem('innn_date',date1);
        localStorage.setItem('outtt_date',date2);

    });
  </script>

  @endsection