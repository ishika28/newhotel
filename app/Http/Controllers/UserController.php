<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Room;
use App\Booking;
use Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    
    public function restaurant()
    {
        return view('restaurant');
    }

    public function attractions()
    {
        return view('attractions');
    }

public function roomdetail()
    {
        return view('roomdetail');
    }
    public function conference()
    {
        return view('conference');
    }
    public function wedding()
    {
        return view('wedding');
    }

    public function storeComment(Request $request){
        Contact::create([
            'full_name'=>$request->get('full_name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'comment'=>$request->get('comment'),
        ]);
        //return view('admin.rooms')->with(['success_message'=>'Room added successfully']);
        $request->session()->flash('success_message', "Message Sent Successfully");
        return redirect()->route('user.contact');
    }

     public function rooms()
    {
        $rooms = Room::orderBy('id', 'desc')
            ->where('status', '=', '1')
            ->where('availability', '=', '1')
            ->where('status', '=', '1')
            ->paginate(6);
        return view('rooms', ['rooms' => $rooms]);
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
 
 
        return view('searchedrooms',['rooms'=>$rooms2]);
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

     public function bookRoomForm($id){
         $room=Room::find($id);
        return view('bookroom',compact('room'));
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
        return redirect()->route('user.rooms');
    }








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
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
