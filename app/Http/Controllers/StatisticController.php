<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RoomfeeRepository;
use App\Services\RoomfeeService;
use App\Models\RoomFeeColection;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{

  public function statistic()
  {
    $totalDebt = $this->getTotalDebtByMonth();
    $totalPrice = $this->getTotalPriceByMonth();
    $listRoom = $this->getRoomDebt();
    
    return response()->json([
      'total_debt' => $totalDebt,
      'total_price' => $totalPrice,
      'list_room' => $listRoom,
    ]);
  }

  public function getTotalDebtByMonth()
  {
    $totalDebt = [0,0,0,0,0,0,0,0,0,0,0,0];

    $month = RoomFeeColection::selectRaw('Month(charge_date) as month')->whereYear('charge_date', date('Y'))
      ->whereColumn('total_paid', '<', 'total_price')
      ->groupBy(DB::Raw('Month(charge_date)'))
      ->pluck('month');

    $total = RoomFeeCollection::selectRaw('sum(total_price - total_paid) as total')
      ->whereYear('charge_date',date('Y'))
      ->whereColumn('total_paid','<','total_price')
      ->groupBy(DB::Raw('Month(charge_date)'))
      ->pluck('total');

    foreach($month as $i => $value){
        --$value;
        $totalDebt[$value] = $total[$i];
    }

    return $totalDebt;
  }

  public function getTotalPriceByMonth()
  {
      $totalPrice = [0,0,0,0,0,0,0,0,0,0,0,0];

      $month = RoomFeeColection::selectRaw('Month(charge_date) as month')
        ->whereYear('charge_date',date('Y'))
        ->groupBy(DB::Raw('Month(charge_date)'))
        ->pluck('month');

      $totalTurnover = RoomFeeColection::selectRaw('sum(total_price) as total')
         ->whereYear('charge_date',date('Y'))
         ->groupBy(DB::Raw('Month(charge_date)'))
         ->pluck('total');

      foreach($month as $i=> $value){
          --$value;
          $totalPrice[$value] = $totalTurnover[$i];
      }
      return $totalPrice;
  }

  public function getRoomDebt()
  {
    return RoomFeeColection::whereColumn('total_paid','<','total_price')->get();
  }

  // public function getChart()
  // {

  // }
}
