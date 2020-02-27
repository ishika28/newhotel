@extends ('layouts.admin')
@section('title',"Hotel Sneha-Book Room")
@section('content-section')


<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-md-8">@include('success_message')</div>
         <div class="col-md-8">@include('error_message')</div>
        <div class="col-md-8">
           <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Book Room</h4>
                </div>
               
                 <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{route('room.bookroom.submit',$room->id)}}" enctype="multipart/form-data"  name="bookroomForm">
                        {{ csrf_field() }}

                        <input type="hidden" id="room_id" value="{{$room->id}}" name="room_id">

                   

                            <div class="col-md-10">
                                <input id="room_no" type="hidden" class="form-control" name="room_no" value="{{$room->room_no}}" autofocus required="required" >

                                @if ($errors->has('room_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                     

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Firstname</label>

                            <div class="col-md-10">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" autofocus required="required">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Lastname</label>

                            <div class="col-md-10">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" autofocus required="required">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-10">
                                <select name="gender" class="form-control" value="{{ old('gender') }}" >
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                                 @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Contact Email</label>

                            <div class="col-md-10">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Contact Phone No.</label>

                            <div class="col-md-10">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" autofocus required="required">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('checked_in_date') ? ' has-error' : '' }}">
                            <label for="checked_in_date" class="col-md-4 control-label">Arrive Date</label>

                            <div class="col-md-10">
                                <input id="checked_in_date_search_book" type="date" class="form-control" name="checked_in_date"  autofocus required="required" readonly="readonly">

                                @if ($errors->has('checked_in_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('checked_in_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('checked_out_date') ? ' has-error' : '' }}">
                            <label for="checked_out_date" class="col-md-4 control-label">Departure Date</label>

                            <div class="col-md-10">
                                <input id="checked_out_date_search_book" type="date" class="form-control" name="checked_out_date" autofocus required="required" readonly="readonly">

                                @if ($errors->has('checked_out_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('checked_out_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection

 @section('javascript')
  <script>
   
     
    var idate = localStorage.getItem('inn_date');
    var odate = localStorage.getItem('outt_date');
    console.log(idate);
   $("#checked_in_date_search_book").val(idate);
   $("#checked_out_date_search_book").val(odate);

  
  </script>
  @endsection