<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name', 'tel','email','identity_card_number'
    ];

    protected $primaryKey = 'id';

    public function tenantContract(){
        return $this->hasMany(TenantContract::Class, 'id');
    }
    public function roomFee() { 
        $this->belongsTo(RoomFeeCollection::class);
    }
}
