<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantContract extends Model
{
    use HasFactory;

    public function room_fee_collection() { 
        $this->belongsTo(RoomFeeCollection::class);
    }

    public function tenant() {
        $this->belongsTo(Tenant::class);
    }
}
