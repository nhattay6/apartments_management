<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'apartment_room_id', 'tenant_id', 'start_date', 'price', 'water_price', 'electricity_price', 'note'
    ];
    protected $primaryKey = 'id';
    public function apartmentRoom() { 
        $this->belongsTo(ApartmentRoom::class, 'apartment_room_id');
    }

    public function tenant() {
        $this->belongsTo(Tenant::class, 'tenant_id');
    }
}
