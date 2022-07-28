<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;

class ApartmentController extends Controller
{
    public function listApartment(Request $request) {
        $apartment  = Apartment::lastest()->pagination(5);
        $response = [
            'pagination' => [
                'total' => $apartment->total(),
                'per_page' => $apartment->perPage(),
                'current_page' => $apartment->currentPage(),
                'last_page' => $apartment->lastPage(),
                'from' => $apartment->firstItem(),
                'to' => $apartment->lastItem(),
            ]
        ];

        return response()->json($response);
    }

    public function store(){
        $this->validate($request, [
            'name' => 'required',
            'adress' => 'required',
            'image' => 'required'
        ]);

        $create = Apartment::create($request->all());
        return response()->json($create);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'adress' => 'required',
            'image' => 'required'
        ]);

        $edit = Apartment::find($id)->update($request->all());
        
        return response()->json($edit);
    }

    public function destroy($id) {
        Apartment::find($id)->delete();
        return response()->json(['delete done!']);
    }
}
