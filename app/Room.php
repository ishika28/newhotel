<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'room_no', 'room_type', 'price','room_description','image','status','availability',
    ];

    public function booking()
    {
        return $this->HasOne(Booking::class, 'room_id')->withTrashed();
    }

}
