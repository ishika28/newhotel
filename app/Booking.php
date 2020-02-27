<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
     protected $fillable = [
          'room_id',
          'room_no',
            'first_name',
            'last_name',
            'gender',
            'email',
            'phone',
            'checked_in_date',
            'checked_out_date',
            'status',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id')->withTrashed();
    }
}
