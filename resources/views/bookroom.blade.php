@extends ('layouts.main2')
@section('title',"Hotel Sneha-Book A Room")
@section('content-section')
<main id="main">
			<!-- about us section -->
			<section class="about-us container add-padding">
				<div class="col-md-6 col-md-offset-3 animate" data-anim-type="fadeInUp" data-anim-delay="300">
						<div class="text-box">
							<h1>Book Room</h1>
						</div>

						<div class="row">
					<form class="form-horizontal" method="POST" action="{{route('room.bookroom.submit.user',$room->id)}}" enctype="multipart/form-data"  name="bookroomForm">
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
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" autofocus required="required" placeholder="First Name">

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
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" autofocus required="required" placeholder="Last Name">

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
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" autofocus placeholder="Email">

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
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" autofocus required="required" placeholder="Phone No.">

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
                                <input id="checked_out_date_search_book" type="date" class="form-control" name="checked_out_date" value="{{ old('checked_out_date') }}" autofocus required="required" readonly="readonly" >

                                @if ($errors->has('checked_out_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('checked_out_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="bookroomsubmit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
					
				</div>
					</div>
				
			</section>
			
		</main>



@endsection

  @section('javascript')
  <script>
   
     
    var idate = localStorage.getItem('innn_date');
    var odate = localStorage.getItem('outtt_date');
    console.log(idate);
   $("#checked_in_date_search_book").val(idate);
   $("#checked_out_date_search_book").val(odate);

  
  </script>
  @endsection