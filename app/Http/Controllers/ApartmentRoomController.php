<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApartmentRoom;
use App\Models\Tenant;
use App\Models\TenantContract;
class ApartmentRoomController extends Controller
{
    public function listRoom($apartmentId) {
        $list = ApartmentRoom::where('apartment_id', $apartmentId)->orderBy('id')->paginate(5);
        return response()->json(['data' => $list]);
    }

    public function create(Request $request, $apartmentId) {
        $request->validate([
            'room_number' => 'required',
        ]);
        $image = $request->file('image');
        $imageName = '';
        if ($image) {
            $storedPath = $image->move('img/apartment_room', $image->getClientOriginalName());
            $imageName = $image->getClientOriginalName();
        }

        $newRoom = [
            'room_number' => $request->room_number,
            'default_price' => $request->default_price,
            'max_tenant' => $request->max_tenant,
            'room_image' => $imageName,
            'apartment_id' => $apartmentId,
        ];

        $create = ApartmentRoom::create($newRoom);
        return response()->json(['data' => $create]);
    }

    public function editRoom (Request $request, $id) {
        $image = $request->file('image');

        $roomInfo = [
            'room_number' => $request->room_number,
            'default_price' => $request->default_price,
            'max_tenant' => $request->default_price,
        ];

        if($image) {
            $storedPath = $image->move('img/apartment', $image->getClientOriginalName());
            $roomInfo['room_image'] = $image->getClientOriginalName();
        } 
        
        $edit = ApartmentRoom::find($id)->update($roomInfo);
        return response()->json($edit);
    }
    
    // fix, sai logic, nếu không có thì phải tạo trước rồi mới update,
    public function editRoomUser(Request $request, $id) {
        $edit = [
            'name' => $request->name,
            'tel' => $request->tel,
            'identity_card_number' => $request->identity_card_number,
        ];

        $editUserRoom = TenantContract::where('apartment_room_id', $id)->first();
        $tenant = Tenant::where('id', $editUserRoom['tenant_id'])->first();

        if(empty($tenant)){
            $tenant = Tenant::create($edit);
        } else {
            $tenant = $tenant->update($edit);
        }

        return response()->json(['data' => $tenant]);
    }   

    public function findRoomById($id) {
        $room = ApartmentRoom::find($id);
        return respone()->json($room);
    }

    public function deystroy($id) {
        ApartmentRoom::find($id)->delete();
        return response()->json(['delete done!']);
    }

    //search with room number
    public function search(Request $request) {
        if(! empty($request->room_number)){
            $room = ApartmentRoom::where('room_bumber', $request->room_number)->first();
        }
        
        return response()->json(['data' =>  $room]);
    }
}
