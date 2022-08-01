<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomFeeColection;

class RoomFeeController extends Controller
{
    public function listRoom() {
        $list = ApartmentRoom::All();
        return response()->json($list);
    }

    // public function listReceipt($apartmentId) {
      
    // }

    // public function addReceipt(Request $request ,$id) {
    //     $request->validate([
    //         'electricity_number' => 'required',
    //         'water_number' => 'required',
    //         'total_paid' => 'required',
    //         'total_price' => 'required',
    //         'charge_date' => 'required',
    //     ]);

    //     $newReceipt = [
    //         'electricity_number' => $request->electricity_number,
    //         'water_number' => $request->water_number,
    //         'total_price' => $request->total_price,
    //         'total_paid' => $request->total_paid,
    //         'charge_date' => $request->charge_date,
    //         'apartment_room_id' => $id
    //     ];
    // }

    // public function editReceipt(Request $request, $id) {
    //     $request->validate([
    //         'electricity_number' => 'required',
    //         'water_number' => 'required',
    //         'total_paid' => 'required',
    //         'total_price' => 'required',
    //     ]);

    

    // }


}
