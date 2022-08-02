<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentRoom extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','room_number', 'apartment_id','price','max_tenant','room_image','created_at','updated_at'
    ];

    public function apartment(){
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }

    // public function room_usage() {
    //     return $this->belongsTo(RoomUsage::class);
    // }

    public function roomFee() {
        return $this->hasMany(RoomFeeCollection::class, 'id');
    }
}
