<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFeeCollection extends Model
{
    use HasFactory;

    public function apartment_rooms() {
        return $this->belongsTo(ApartmentRoom::class);
    }

    public function tenant_contract() {
        return $this->hasManny(TenantContract::class);
    }

    public function tenant() {
        return $this->hasManny(Tenant::class);
    }

    public function room_fee_collection_history() {
        return $this->belongsTo(RoomFeeCollectionHistory::class);
    }
}
