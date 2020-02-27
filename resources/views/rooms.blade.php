@extends ('layouts.main2')
@section('title',"Hotel Sneha-Rooms")
@section('content-section')
<main id="main">
			<div class="container gen-padding">
				 @include('success_message')
				<div class="row">
					<!-- side bar -->
					<aside class="col-md-3 col-sm-4 sidebar">
						<!-- widget -->
						<section class="widget">
							<h1>Book a room</h1>
							<div class="holder reservation-bar">
								<div class="input-append date" id="dpd1" data-date="Check In" data-date-format="dd-mm-yyyy">
									<input class="form-control" size="16" type="text" value="Arrive date">
									<span class="icon-calendar"></span>
								</div>
								<div class="input-append date" id="dpd2" data-date="Check Out" data-date-format="dd-mm-yyyy">
									<input class="form-control" size="16" type="text" value="Departure date">
									<span class="icon-calendar"></span>
								</div>
								<!-- <div class="form-group">
									<div class="fake-select">
										<select>
											<option selected value="Adult">Adult</option>
											<option>Children</option>
											<option>Option3</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="fake-select">
										<select>
											<option selected value="Room">Room</option>
											<option>Option2</option>
											<option>Option3</option>
										</select>
									</div>
								</div> -->
								<input type="submit" class="btn btn-default" value="check availability">
							</div>
						</section>
						<!-- widget -->
				<!-- 		<section class="widget">
							<h1>filter by</h1>
							<div class="holder">
								<div class="block">
									<h2>room type</h2>
									<form action="#">
										<ul class="list-unstyled">
											<li>
												<label for="check-1">
													<input id="check-1" type="checkbox">
													<span class="fake-input"></span>
													<span class="fake-label">All</span>
												</label>
											</li>
											<li>
												<label for="check-2">
													<input id="check-2" type="checkbox">
													<span class="fake-input"></span>
													<span class="fake-label">Single room</span>
												</label>
											</li>
											<li>
												<label for="check-3">
													<input id="check-3" type="checkbox">
													<span class="fake-input"></span>
													<span class="fake-label">Double room</span>
												</label>
											</li>
											<li>
												<label for="check-4">
													<input id="check-4" type="checkbox">
													<span class="fake-input"></span>
													<span class="fake-label">Presidential suite</span>
												</label>
											</li>
											<li>
												<label for="check-5">
													<input id="check-5" type="checkbox">
													<span class="fake-input"></span>
													<span class="fake-label">Family room</span>
												</label>
											</li>
										</ul>
									</form>
								</div>
								<div class="block">
									<h2>Price</h2>
									<div class="range-slider">
										<div id="slider"></div>
									</div>
								</div>
							</div>
						</section> -->
						<!-- widget -->
						<!-- <section class="widget">
							<h1>selected rooms</h1>
							<div class="holder">
								<ul class="list list-unstyled">
									<li><a href="#">Single room</a></li>
									<li><a href="#">Double room</a></li>
									<li><a href="#">Family room</a></li>
								</ul>
							</div>
						</section> -->
					</aside>
					<!-- content -->
					<div class="col-md-9 col-sm-8 content">
						
						<div class="row rooms">
							 @if(count($rooms)==0)
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <h1 class="btn btn-danger">Oops! No room available now</h1>
      </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    @else
     @foreach($rooms as $singleroom)
							<article class="col-md-4 col-xs-6">
								<div class="box">
									<a href="#">
										<div class="image-frame">
											<img class = "img-responsive" src="{{asset('image/uploads/rooms/'.$singleroom->image)}}" alt="Card image cap" >
										</div>
										<div class="info-block">
											<div class="info-frame">
												<h1>{{$singleroom->room_type}}</h1>
												<div class="text-box">
													
													<strong class="rent-price">Rs. {{$singleroom->price}} <span>per night</span></strong>
												</div>
											</div>
										</div>
									</a>
								</div>
							</article>
							  @endforeach
   </div>

    @endif

    <div class="col-md-6 col-md-offset-3">
      <div class="text-center"> 
        {{$rooms->links()}}
      </div>
    </div>
 

						</div>
				
					</div>
				</div>
			</div>
		</main>

@endsection