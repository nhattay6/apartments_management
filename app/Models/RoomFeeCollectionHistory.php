<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFeeCollectionHistories extends Model
{
    use HasFactory;

    public function room_fee_collection() {
        return $this->belongsTo(RoomFeeCollection::class);
    }
}
