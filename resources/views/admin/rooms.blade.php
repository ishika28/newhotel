@extends ('layouts.admin')
@section('title',"Hotel Sneha-Rooms")

@section('content-section')
<div class="container">
	<div class="row">
		
		<div class="col-md-12">
			
    @include('success_message')
     <div class="col-md-12">
           <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Search Room</h4>
                </div>
    <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{route('room.searchroom.submit')}}" name="searchroomForm">
                        {{ csrf_field() }}
                        <div class="form-row">
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

                       
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="searchroomform">
                                    Search
                                </button>
                            </div>
                        </div>
                      </div>
                    </form>
                </div>
                </div>
              </div>
            </div>

                <div class="col-md-12">
                  <div class="col-md-12">
      <button class="btn btn-warning" style="float: right"><a href="{{route('admin.addrooms')}}">Add New Rooms</a></button>
    </div>
    @if(count($rooms)==0)
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <h1 class="btn btn-danger">Oops! No room available now</h1>
      </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    @else
   
    <h4>All Rooms</h4>
   <div class="row">
   
    	 @foreach($rooms as $singleroom)
    	 
   <div class="col-md-4 col-md-offset-4">
  <div class="card">
    <img class="card-img-top" src="{{asset('image/uploads/rooms/'.$singleroom->image)}}" alt="Card image cap" width="200" height="200">
    <div class="card-body">
      <h5 class="card-title">{{$singleroom->room_type}}</h5>
      <p class="card-text">{{$singleroom->room_description}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Rs. {{$singleroom->price}}</small>
      <small class="text-muted">Room No:{{$singleroom->room_no}}</small>
       <small class="text-muted">Room Id:{{$singleroom->id}}</small>
    </div>
    <a href="{{route('room.editroom',[$singleroom->id])}}" class="btn btn-primary">Edit</a>
      <a href="{{route('room.delete',[$singleroom->id])}}"  class="btn btn-danger" onclick="return confirm('Are you sure want to delete this room')">Delete</a>
  </div>
</div>
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
       localStorage.setItem('inn_date',date1);
        localStorage.setItem('outt_date',date2);

    });
  </script>

  @endsection

