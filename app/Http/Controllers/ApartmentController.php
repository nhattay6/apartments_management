<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;

class ApartmentController extends Controller
{
    public function listApartment(Request $request) {
        //$apartment  = Apartment::lastest()->pagination(5);
        // $response = [
        //     'pagination' => [
        //         'total' => $apartment->total(),
        //         'per_page' => $apartment->perPage(),
        //         'current_page' => $apartment->currentPage(),
        //         'last_page' => $apartment->lastPage(),
        //         'from' => $apartment->firstItem(),
        //         'to' => $apartment->lastItem(),
        //     ]
        // ];
        $apartment = Apartment::orderby('id', 'asc')->paginate(5)->get();
        return response()->json($apartment);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'adress' => 'required',
        ]);
        $image = $request->file('image');
        $imageName = '';

        if($image) {
            $storePath = $image->move('img/apartment', $image->getClientOriginalName());
            $imageName = $image->getClientOriginalName();
        }

        $newApartment = [
            'name' => $request->name,
            'address' => $request->address,
            'image' => $imageName,
        ];

        $create = Apartment::create($newApartment);

        return response()->json($create);
    }

    public function edit(Request $request, $id){
        $image = $request->file('image');
        
        $apartment = [
            'name' => $request->name,
            'address' => $request->address,
        ];

        if ($image) {
            $storedPath = $image->move('img/apartment', $image->getClientOriginalName());
            $apartment['image'] = $image->getClientOriginalName();
        }

        $edit = Apartment::find($id)->update($apartment);
        
        return response()->json($edit);
    }

    public function findById($id) {
        $apartment = Apartment::find($id);
        return respone()->json($apartment);
    }

    public function destroy($id) {
        Apartment::find($id)->delete();
        return response()->json(['delete done!']);
    }

    public function search($name, $address) {
        $listApartment = Apartment::orderby('id', 'asc');
        if(!empty($name)) {
            $listApartment = $listApartment->where('name', 'LIKE', '%' . $name . '%');
        }
        if(!empty($address)) {
            $listApartment = $listApartment->where('name', 'LIKE', '%' . $address . '%');
        }
        
        $listApartment =  $listApartment->get();
        return response()->json($listApartment);
    }
}
