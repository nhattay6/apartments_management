<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContractMonthlyCost;
use App\Models\MonthlyCost;

class MonthlyCostController extends Controller
{
    public function index()
    {   
        $listMonthlyCost = MonthlyCost::All();
        return response()->json($listMonthlyCost);
    }

    public function add(Request $request)
    {
        $newCost = [
            'name' => $request->name
        ];
        $createNewCost =  MonthlyCost::create($newCost);
        return response()->json($createNewCost);
    }

    public function delete($id)
    {
        $cost = MonthlyCost::find($id)->delete();
        return response()->json([
            'success' => true,
            'msg' => 'delete cost successful!',
        ]);
    }

    public function edit($id, Request $request)
    {   
        $newCost = [
            'name' => $request->name
        ];
        $edit = MonthlyCost::find($id)->update($newCost);

        return response()->json([
            'success' => true,
            'edit_cost' => $edit,
        ]);
    }

    public function fetchCost($id) {
        $costMonth = MonthlyCost::find($id);
        return response()->json($costMonth);
    }
}
