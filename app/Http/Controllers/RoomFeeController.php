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

    public function fethRoomFeeById($id) {
        return RoomFeeCollection::find($id);
    }

    public function fetchContractById($roomId) {
       $currentApartment = TenantContract::whereMonth('end_date', '>=', date('m'))
        ->where('apartment_room_id', $roomId)->first();
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
            'apartment_room_id' => $id,
            'tenant_contract_id' => $request->tenant_contract_id,
        ];

        try {
            $contractCurrent = $this->getContractByTime($request->charge_date, $id);
            $newReceipt['tenant_id'] = $contractCurrent->tenant_id;
            $newContract = TenantContract::create($newReceipt);
            return response()->json([
                'current_contract' => true,
                'msg' => 'add contract successful!',
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function editReceipt(Request $request, $id) {
        $request->validate([
            'electricity_number' => 'required',
            'water_number' => 'required',
            'total_paid' => 'required',
            'total_price' => 'required',
        ]);

        try {
            $receiptCurrent  = RoomFeeCollection::find($id);
            $receipt = [
                'electricity_number' => $request->electricity_number,
                'water_number' => $request->water_number,
                'total_price' => $request->total_price,
                'total_paid' => $request->total_paid,
            ];
            $edit = RoomFeeCollection::update($id, $receipt);
            
            return response()->json($edit);

        } catch(\Exception $e) {
            return response()->json($e);
        }
    }

    public function getContractByTime($time, $id) {
        $result = TenantContract::where('start_date', '<', $time)
            ->where('end_date', '>', $time)
            ->where('apartment_room_id', $id)
            ->first();
        return $result;
    } 
}
