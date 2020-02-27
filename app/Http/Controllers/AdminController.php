<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Booking;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      return view('home');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function addRooms()
    {
        return view('admin.addrooms');
    }

     public function storeRoom(Request $request){
        $image=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,9999999).'_'.$file->getClientOriginalName(); 
            $file->move('image/uploads/rooms',$image);
        }
        Room::create([
            'room_no'=>$request->get('room_no'),
            'room_type'=>$request->get('room_type'),
            'price'=>$request->get('price'),
            'room_description'=>$request->get('room_description'),
            'image'=>$image,
            'status'=>'1',
            'availability'=>'1',
        ]);
        //return view('admin.rooms')->with(['success_message'=>'Room added successfully']);
        $request->session()->flash('success_message', "Room Added Successfully");
        return redirect()->route('admin.rooms');
    }

    public function rooms()
    {
        $rooms = Room::orderBy('id', 'desc')
            ->where('status', '=', '1')
            //->where('availability', '=', '1')
            ->paginate(6);
        return view('admin.rooms', ['rooms' => $rooms]);
    }

    public function bookedRooms()
    {
       $rooms =Room::orderby('rooms.id','desc')
            ->join('bookings', 'rooms.id', '=', 'bookings.room_id')
            ->select('rooms.id as rid','rooms.price as rprice','rooms.room_no as rno','rooms.room_description  as rdesc','rooms.room_type as rtype',
                'rooms.image as rimage','bookings.checked_in_date as cin','bookings.checked_out_date as cout')
            ->where('rooms.status','=','1')
            ->where('bookings.status','=','1')    
            ->paginate(6);
        return view('admin.bookedrooms', ['rooms' => $rooms]);
    }

    /*public function availableRooms()
    {
        $rooms = Room::orderBy('id', 'desc')
            ->where('status', '=', '1')
            ->where('availability', '=', '1')
            ->paginate(6);
        return view('admin.availablerooms', ['rooms' => $rooms]);
    }*/

    public function deleteRoom(Request $request, $id){
        $room=Room::find($id);
        $room->status=0;
        $room->update([
            'status'=>$room->status,
        ]);
        if(!$room){
            $request->session()->flash('success_message','Room Delete Failed.');
        }
        $request->session()->flash('success_message','Room Deleted Successfully.');
        return redirect()->route('admin.rooms');
    }


    public function editRoomForm($id){
         $room=Room::find($id);
        return view('admin.editroom',compact('room'));
    }

    public function editRoom(Request $request, $id){
        $room=Room::find($id);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,9999999).'_'.$file->getClientOriginalName();
            $file->move('image/uploads/rooms',$image);

            //remove old image
            if($room->image){
                unlink('image/uploads/rooms/'.$room->image);
            }
            $room->image=$image;
        }

        $room->update([
            'room_no'=>$request->get('room_no'),
            'room_type'=>$request->get('room_type'),
            'price'=>$request->get('price'),
            'room_description'=>$request->get('room_description'),
            'image'=>$room->image,
        ]);
        if(!$room){
            $request->session()->flash('success_message','Room Update Failed.');
        }
        $request->session()->flash('success_message','Room Updated Successfully.');
        return redirect()->route('room.editroom',$id);
    }

    public function bookRoomForm($id){
         $room=Room::find($id);
        return view('admin.bookroom',compact('room'));
    }

    public function bookRoom(Request $request,$id){
        Booking::create([
            'room_id'=>$request->get('room_id'),
            'room_no'=>$request->get('room_no'),
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'gender'=>$request->get('gender'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'checked_in_date'=>$request->get('checked_in_date'),
            'checked_out_date'=>$request->get('checked_out_date'),
            'status'=>'1',
        ]);
         /*$room=Room::find($id);
         $room->update([
            'availability'=>'0'
        ]);*/
        //return view('admin.rooms')->with(['success_message'=>'Room added successfully']);
        $request->session()->flash('success_message', "Room Booked Successfully");
        return redirect()->route('admin.rooms');
    }

     public function bookedRoomsTable()
    {
        $date=new Carbon;
        $rooms_checked_out = Booking::orderBy('id', 'desc')
            //->where('status', '=', '1')
            //->where('availability', '=', '0')
            ->where('checked_out_date','=',Carbon::today()->toDateString())
            ->paginate(20);

         $rooms_checked_in = Booking::orderBy('id', 'desc')
            //->where('status', '=', '1')
            //->where('availability', '=', '0')
            ->where('checked_in_date','=',Carbon::today()->toDateString())
            ->paginate(20);

        return view('admin.index', ['rooms_checked_out' => $rooms_checked_out,'rooms_checked_in'=>$rooms_checked_in]);
    }

     public function searchRoomForDate(Request $request){
      $in_date=$request->get('checked_in_date_search');
      //$in_date_final = Carbon::create($in_date);

      $out_date=$request->get('checked_out_date_search');
      $dt = Carbon::create($out_date);
      $dt_final=$dt->subDay();

      $out_date_final=$dt_final->toDateString();
      //dd($out_date_final);
    $bookings = \DB::table('bookings')
    ->select('*')
    ->get();
 
   
$booked=collect([]);
    for($i=0;$i<$bookings->count();$i++)
    {
        if
        (
            ($in_date>=$bookings[$i]->checked_in_date and $in_date<=$bookings[$i]->checked_out_date)
            or
            ($out_date>=$bookings[$i]->checked_in_date and $out_date<=$bookings[$i]->checked_out_date)
            or
            ($bookings[$i]->checked_in_date>=$in_date and $bookings[$i]->checked_in_date<=$out_date)
        )
            {
            $booked->push($bookings[$i]);
        }
    }
 
    $rooms2 =Room::orderby('rooms.id','desc')
    ->select('rooms.id as rid','rooms.price as rprice','rooms.room_no as rno','rooms.room_description  as rdesc','rooms.room_type as rtype',
        'rooms.image as rimage')
    ->where('rooms.status','=','1')
    ->get();
 
   
 
 
for($i = 0;$i<$booked->count();$i++)
{
    for($j=0;$j<$rooms2->count();$j++){
        if($booked[$i]->room_no==$rooms2[$j]->rno){
            $rooms2->forget($j);
            // array_splice($rooms2, $j, 1);
        }
    }
}
 
 
        return view('admin.searchedrooms',['rooms'=>$rooms2]);
    }

    public function cancelBooking(Request $request, $id){
        $room=Booking::find($id);
        $room->status=0;
        $room->update([
            'status'=>$room->status,
        ]);
        if(!$room){
            $request->session()->flash('success_message','Room Booking Cancellation Failed.');
        }
        $request->session()->flash('success_message','Room Booking Cancelled Successfully.');
        return redirect()->route('admin.bookedrooms');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
      return view('user.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
         $time_from = $request->get('checked_in_date_search');
        $time_to = $request->get('checked_out_date_search');

        if ($request->isMethod('POST')) {
            $rooms = Room::with('bookings')->whereHas('bookings', function ($q) use ($time_from, $time_to) {
                $q->where(function ($q2) use ($time_from, $time_to) {
                    $q2->where('time_from', '>=', $time_to)
                       ->orWhere('time_to', '<=', $time_from);
                });
            })->orWhereDoesntHave('booking')->get();
        } else {
            $rooms = null;
        }
        return view('admin.searchedrooms', compact('rooms', 'time_from', 'time_to'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     
}


 // dd($in_date,$out_date,$dt,$dt_final, $out_date_final);
       /* $rooms =Room::orderby('rooms.id','desc')
            ->join('bookings', 'rooms.id', '=', 'bookings.room_id')
            ->select('rooms.id as rid','rooms.price as rprice','rooms.room_no as rno','rooms.room_description  as rdesc','rooms.room_type as rtype',
                'rooms.image as rimage')
            ->where('rooms.status','=','1')
            ->where('bookings.status','=','1')
            ->whereNotBetween('bookings.checked_in_date', [$in_date,$out_date_final])
            ->whereNotBetween('bookings.checked_out_date',[$in_date,$out_date_final])
            ->get();*/

       /* $rooms2 =Room::orderby('rooms.id','desc')
            ->join('bookings', 'rooms.id', '<>', 'bookings.room_id')
            ->select('rooms.id as rid','rooms.price as rprice','rooms.room_no as rno','rooms.room_description  as rdesc','rooms.room_type as rtype',
                'rooms.image as rimage')
            ->where('rooms.status','=','1')
            ->where('bookings.checked_in_date','<>',$in_date)
            //->whereDay('created_at', '=', date('d'));
            ->where('bookings.checked_out_date','<=',$out_date)
            ->paginate(20);
*/