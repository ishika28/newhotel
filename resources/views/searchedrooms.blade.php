@extends ('layouts.main2')
@section('title',"Hotel Sneha-Rooms")
@section('content-section')
<main id="main">
			<div class="container gen-padding">
				<div class="row">
					
					<div class="col-md-12 ">
						
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
							<article class="col-md-4  col-xs-6">
								<div class="box">
									<a href="#">
										<div class="image-frame">
											<img class = "img-responsive" src="{{asset('image/uploads/rooms/'.$singleroom->rimage)}}" alt="Card image cap" >
										</div>
										<div class="info-block">
											<div class="info-frame">
												<h1>{{$singleroom->rtype}}</h1>
												 <a href="{{route('room.bookroom.user',[$singleroom->rid])}}" class="btn btn-primary">Book Now</a>
												<div class="text-box">
													
													<strong class="rent-price">Rs. {{$singleroom->rprice}} <span>per night</span></strong>

												</div>
											</div>

										</div>
									</a>
								</div>
							</article>

							  @endforeach
   </div>

    @endif

 

						</div>
				
					</div>
			</div>
		</main>

@endsection