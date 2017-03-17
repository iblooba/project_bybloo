<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

  public function index()
    {

    echo  $now = Carbon::now();
    echo "<br/>";
    echo  $nowA = Carbon::now();
    echo "<br/>";
    echo  $today = Carbon::today();
    echo "<br/>";
    echo $datestart = $now->year($now->year)->month($now->month)->day(1)->hour(00)->minute(00)->second(00)->toDateTimeString();
    echo "<br/>";
    echo  $dateend = $nowA->year($nowA->year)->month($nowA->month)->day($nowA->day)->hour($nowA->hour)->minute($nowA->minute)->second($nowA->second)->toDateTimeString();
    echo "<br/>";


        $orders_cp  =  DB::table('users')
                ->leftJoin('shops', 'users.id', '=', 'shops.id')
                ->leftJoin('orders', 'shops.ShopContract', '=', 'orders.seller')
                ->select('shops.ShopContract', 'orders.Total')
                ->where([['users.id', '=', Auth::user()->id],['orders.Status', '=', 'CP']
                ,['orders.ConfirmDateTime', '>=', $datestart , 'and', 'orders.ConfirmDateTime', '<=', $dateend]
                ,] )
                ->sum('Total');

      $orders_wa =  DB::table('users')
                  ->leftJoin('shops', 'users.id', '=', 'shops.id')
                  ->leftJoin('orders', 'shops.ShopContract', '=', 'orders.seller')
                  ->select('shops.ShopContract', 'orders.Total')
                  ->where([['users.id', '=', Auth::user()->id],
                  ['orders.Status', '=', 'WA'],
                  ['orders.OrderDateTime', '>=', $datestart , 'and', 'orders.OrderDateTime', '<=', $dateend]
                  ,] )
                  ->sum('Total');

            $data = array(
              'datestart' => $datestart,
              'dateend' => $dateend,
              'orders_cp' => $orders_cp,
              'orders_wa' => $orders_wa
               );

        return view("test",$data);

  }
}
