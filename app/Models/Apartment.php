<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Apartment extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function apartment_room(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ApartmentRoom::class);
    }
}
