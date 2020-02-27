@extends ('layouts.admin')
@section('title',"Hotel Sneha-Dashboard")
@section('content-section')
<div class="container">
	 <div class="col-md-12">
        @include('success_message')
    @if(count($rooms_checked_out)==0)
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <h1 class="btn btn-danger">Oops! Noone is checking out today.</h1>
      </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    @else
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Departing Today</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table-striped" id="table_prodicts" cellspacing="0" width="100%">
                      <thead class=" text-success">
                       <th>Room ID</th>
          <th>Room No</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Arrive Date</th>
          <th>Departure Date</th>
                      </thead>
                        @foreach($rooms_checked_out as $singleroom)
                      <tbody >

          <td>{{$singleroom->room_id}}</td>
          <td>{{$singleroom->room_no}}</td>
          <td>{{$singleroom->first_name}}</td>
          <td>{{$singleroom->last_name}}</td>
          <td>{{$singleroom->gender}}</td>
          <td>{{$singleroom->email}}</td>
          <td>{{$singleroom->phone}}</td>
          <td>{{$singleroom->checked_in_date}}</td>
          <td>{{$singleroom->checked_out_date}}</td>
                      </tbody>
                       @endforeach
                    </table>
                  </div>
                </div>
              </div>
               @endif
            </div>


    <div class="col-md-12">
        @include('success_message')
    @if(count($rooms_checked_in)==0)
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <h1 class="btn btn-danger">Oops! Noone is checking in today.</h1>
      </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    @else
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Arriving Today</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table-striped" id="table_prodicts" cellspacing="0" width="100%">
                      <thead class=" text-success">
                       <th>Room ID</th>
          <th>Room No</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Arrive Date</th>
          <th>Departure Date</th>
                      </thead>
                        @foreach($rooms_checked_in as $singleroom)
                      <tbody >

          <td>{{$singleroom->room_id}}</td>
          <td>{{$singleroom->room_no}}</td>
          <td>{{$singleroom->first_name}}</td>
          <td>{{$singleroom->last_name}}</td>
          <td>{{$singleroom->gender}}</td>
          <td>{{$singleroom->email}}</td>
          <td>{{$singleroom->phone}}</td>
          <td>{{$singleroom->checked_in_date}}</td>
          <td>{{$singleroom->checked_out_date}}</td>
                      </tbody>
                       @endforeach
                    </table>
                  </div>
                </div>
              </div>
               @endif
            </div>

  
    
		
	</div>
</div>



@endsection