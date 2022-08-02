<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFeeCollection extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $fillable = [
       'id','apartment_room_id', 'tenant_contract_id', 'tenant_id','total_price','total_paid','water_number','electricity_number','charge_date' 
    ];

    public function apartmentRoom() {
        return $this->belongsTo(ApartmentRoom::class, 'apartment_room_id');
    }

    public function tenantContract() {
        return $this->hasManny(TenantContract::class, 'tenant_contract_id');
    }

    public function tenant() {
        return $this->hasManny(Tenant::class, 'tenant_id');
    }

    // public function room_fee_collection_history() {
    //     return $this->belongsTo(RoomFeeCollectionHistory::class);
    // }
}
