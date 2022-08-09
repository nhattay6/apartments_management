<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomFeeColection;
use App\Models\ApartmentRoom;
use App\Models\TenantContract;

class RoomFeeController extends Controller
{
    public function listRoomFee() {
        $list = ApartmentRoom::All();
        return response()->json($list);
    }


    // dữ liệu chưa như ý - theo từng phòng
    public function listReceipt($id) {
        // $listReceipt = RoomFeeColection::where('apartment_room_id', $apartmentId)->get();

        $listReceipt = RoomFeeCollection::find($id);
        $contractCurrent = TenantContract::whereMonth('end_date', '>=', date('m'))->where('apartment_room_id', $id)->first();

        //compact dữ liệu - xem lại chỗ này
        $data = [
            'list_receipt' => $listReceipt,
            'contract_current' => $contractCurrent,
        ];

        return response()->json($data); 
    }  

    public function fethRoomById() {
    
    }

    public function fetchContractById($roomId) {
        
    }

    public function addReceipt(Request $request ,$id) {
        $request->validate([
            'electricity_number' => 'required',
            'water_number' => 'required',
            'total_paid' => 'required',
            'total_price' => 'required',
            'charge_date' => 'required',
        ]);

        $newReceipt = [
            'electricity_number' => $request->electricity_number,
            'water_number' => $request->water_number,
            'total_price' => $request->total_price,
            'total_paid' => $request->total_paid,
            'charge_date' => $request->charge_date,
            'apartment_room_id' => $id
        ];

        // $contractCurrent = 
    }

    public function editReceipt(Request $request, $id) {
        $request->validate([
            'electricity_number' => 'required',
            'water_number' => 'required',
            'total_paid' => 'required',
            'total_price' => 'required',
        ]);
    }

}
