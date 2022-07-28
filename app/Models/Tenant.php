<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    public function room_fee_collection() { 
        $this->belongsTo(RoomFeeCollection::class);
    }

    public function tenant_contract() {
        $this->belongsTo(TenantContract::class);
    }
}
