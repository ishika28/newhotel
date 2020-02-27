@extends ('layouts.admin')
@section('title',"Hotel Sneha-Add Rooms")
@section('content-section')

<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-md-8">@include('success_message')</div>
        <div class="col-md-8">
           <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Room</h4>
                </div>
               
                 <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{route('admin.addrooms.submit')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }}">
                            <label for="room_no" class="col-md-4 control-label">Room No.</label>

                            <div class="col-md-10">
                                <input id="room_no" type="text" class="form-control" name="room_no" value="{{ old('room_no') }}" autofocus required="required">

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
                                <select name="room_type" class="form-control" value="{{ old('room_type') }}" >
                                    <option>Maharaja Suite</option>
                                    <option>Presidential Suite</option>
                                    <option>Premium Double</option>
                                    <option>Premium Single</option>
                                    <option>Standard Double</option>
                                    <option>Standard Single</option>
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
                                <select name="price" class="form-control" value="{{ old('price') }}" >
                                    <option>1000</option>
                                    <option>2000</option>
                                    <option>3000</option>
                                    <option>4000</option>
                                    <option>5000</option>
                                    <option>6000</option>
                                    <option>7000</option>
                                    <option>8000</option>
                                    <option>9000</option>
                                    <option>10000</option>
                                    <option>11000</option>
                                    <option>12000</option>
                                    <option>13000</option>
                                    <option>14000</option>
                                    <option>15000</option>
                                    <option>16000</option>
                                    <option>18000</option>
                                    <option>19000</option>
                                    <option>20000</option>
                                    <option>Above 20000</option>


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
                                <textarea id="room_description" type="text" class="form-control" name="room_description" value="{{ old('room_description') }}" autofocus rows="5" cols="100" required="required"></textarea>

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
                                <input id="image" type="file"  name="image" required="required">

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
                                    Register
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