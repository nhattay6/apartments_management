<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;

class ApartmentController extends Controller
{
    public function listApartment(Request $request) {
        // $apartment  = Apartment::lastest()->pagination(5);

        // $apartment  = Apartment::all()->orderBy('id')->paginate(5)->get();
        // $response = [
        //     'pagination' => [
        //         'data' => $apartment->items(),
        //         'totalRecord' => $apartment->total(), 
        //         'per_page' => $apartment->perPage(),
        //         'current_page' => $apartment->currentPage(),
        //         // 'last_page' => $apartment->lastPage(),
        //         // 'from' => $apartment->firstItem(),
        //         // 'to' => $apartment->lastItem(),
        //     ]
        // ];
        // $apartment = Apartment::all();

        $apartment = Apartment::orderBy('id')->paginate(6);
        return response()->json(['data' => $apartment]);
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

        return response()->json(['data' => $create]);
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
        
        return response()->json(['data' => $edit]);
    }

    public function findById($id) {
        $apartment = Apartment::find($id);
        return response()->json(['data' => $apartment]);
    }

    public function destroy($id) {
        Apartment::find($id)->delete();
        return response()->json(['delete done!']);
    }

    public function search($name, $address) {
        // $listApartment = Apartment::orderBy('id');
        if(!empty($name)) {
            $listApartment = Apartment::where('name', 'LIKE', '%' . $name . '%')->orderBy('name');
        }
        if(!empty($address)) {
            $listApartment = Apartment::where('name', 'LIKE', '%' . $address . '%')->orderBy('address');
        }
        return response()->json(['data' => $listApartment]);
    }
}
