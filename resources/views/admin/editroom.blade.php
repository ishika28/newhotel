@extends ('layouts.admin')
@section('title',"Hotel Sneha-Edit Rooms")
@section('content-section')

<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-md-8">@include('success_message')</div>
        <div class="col-md-8">
           <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Room</h4>
                </div>
               
                 <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{route('room.editroom.submit',$room->id)}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }}">
                            <label for="room_no" class="col-md-4 control-label">Room No.</label>

                            <div class="col-md-10">
                                <input id="room_no" type="text" class="form-control" name="room_no" value="{{$room->room_no}}" autofocus required="required">

                                @if ($errors->has('room_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('room_type') ? ' has-error' : '' }}">
                            <label for="room_type" class="col-md-4 control-label">Room Type</label>

                            <div class="col-md-10">
                                <select name="room_type" class="form-control" value="{{$room->room_type}}" >
                                    <option {{($room->room_type=='Maharaja Suite')?"selected":""}}>Maharaja Suite</option>
                                    <option {{($room->room_type=='Presidential Suite')?"selected":""}}>Presidential Suite</option>
                                    <option {{($room->room_type=='Premium Double')?"selected":""}}>Premium Double</option>
                                    <option {{($room->room_type=='Premium Single')?"selected":""}}>Premium Single</option>
                                    <option {{($room->room_type=='Standard Double')?"selected":""}}>Standard Double</option>
                                    <option {{($room->room_type=='Standard Single')?"selected":""}}>Standard Single</option>
                                   
                                </select>

                                 @if ($errors->has('room_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-10">
                                <select name="price" class="form-control" value="" >
                                   <option {{($room->price=='1000')?"selected":""}}>1000</option>
                                        <option {{($room->price=='2000')?"selected":""}}>2000</option>
                                        <option {{($room->price=='3000')?"selected":""}}>3000</option>
                                        <option {{($room->price=='4000')?"selected":""}}>4000</option>
                                        <option {{($room->price=='5000')?"selected":""}}>5000</option>
                                        <option {{($room->price=='6000')?"selected":""}}>6000</option>
                                        <option {{($room->price=='7000')?"selected":""}}>7000</option>
                                        <option {{($room->price=='8000')?"selected":""}}>8000</option>
                                        <option {{($room->price=='9000')?"selected":""}}>9000</option>
                                        <option {{($room->price=='10000')?"selected":""}}>10000</option>
                                        <option {{($room->price=='11000')?"selected":""}}>11000</option>
                                        <option {{($room->price=='12000')?"selected":""}}>12000</option>
                                        <option {{($room->price=='13000')?"selected":""}}>13000</option>
                                        <option {{($room->price=='14000')?"selected":""}}>14000</option>
                                        <option {{($room->price=='15000')?"selected":""}}>15000</option>
                                        <option {{($room->price=='16000')?"selected":""}}>16000</option>
                                        <option {{($room->price=='17000')?"selected":""}}>17000</option>
                                        <option {{($room->price=='18000')?"selected":""}}>18000</option>
                                        <option {{($room->price=='19000')?"selected":""}}>19000</option>
                                        <option {{($room->price=='20000')?"selected":""}}>20000</option>
                                        <option {{($room->price=='20000+')?"selected":""}}>20000+</option>


                                </select>

                                 @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         

                         <div class="form-group{{ $errors->has('room_description') ? ' has-error' : '' }}">
                            <label for="room_description" class="col-md-4 control-label">Room Description</label>

                            <div class="col-md-10">
                                <textarea id="room_description" type="text" class="form-control" name="room_description" text="{{$room->room_description}}" autofocus rows="5" cols="100" required="required">{{$room->room_description}}</textarea>

                                @if ($errors->has('room_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label" >Select Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file"  name="image">
                                <span>Current Image:<img src="{{asset('image/uploads/rooms/'.$room->image)}}" width="200"></span>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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