<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentRoom extends Model
{
    use HasFactory;

    public function apartment(){
        return $this->belongsTo(Apartment::class);
    }

    public function room_usage() {
        return $this->belongsTo(RoomUsage::class);
    }

    public function room_fee_collection() {
        return $this->belongsTo(RoomFeeCollection::class);
    }
}
