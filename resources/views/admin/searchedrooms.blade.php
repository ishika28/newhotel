@extends ('layouts.admin')
@section('title',"Hotel Sneha-Rooms")
@section('content-section')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
     @include('success_message')
    @if(count($rooms)==0)
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <h1 class="btn btn-danger">Oops! No room available now</h1>
      </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    @else
   
    <h4>Rooms > Available Rooms</h4>
   <div class="row">
   
    	 @foreach($rooms as $singleroom)
    	 
   <div class="col-md-4 col-md-offset-4">
  <div class="card">
    <img class="card-img-top" src="{{asset('image/uploads/rooms/'.$singleroom->rimage)}}" alt="Card image cap" width="200" height="200">
    <div class="card-body">
      <h5 class="card-title">{{$singleroom->rtype}}</h5>
      <p class="card-text">{{$singleroom->rdesc}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Rs. {{$singleroom->rprice}}</small>
       <small class="text-muted">Room No:{{$singleroom->rno}}</small>
       <small class="text-muted">Room Id:{{$singleroom->rid}}</small>
    </div>
    <a href="{{route('room.bookroom',[$singleroom->rid])}}" class="btn btn-primary">Book This Room</a>
  </div>
</div>
   @endforeach
   </div>

    @endif

		</div>
	</div>

</div>



@endsection