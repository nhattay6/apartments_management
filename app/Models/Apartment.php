<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Apartment extends Model
{
    use HasFactory;
    protected $table = 'apartments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','name', 'address','image','user_id','created_at','updated_at'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function apartmentRoom()
    {
        return $this->hasMany(ApartmentRoom::class, id);
    }
}
