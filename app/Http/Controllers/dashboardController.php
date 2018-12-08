<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function counter()
    {
        $autocharges1 = DB::table('transactions_1513991762415000038187743')->where('action' , 'AUTO_CHARGE')->count();
        $autocharges2 = DB::table('transactions_1513991762415000000015575')->where('action' , 'AUTO_CHARGE')->count();
        $autocharges = $autocharges1 + $autocharges2;
        $unsubs = DB::table('transactions_1513991762415000038187743')->where('action' , 'UNSUBSCRIPTION')->count();
        $subs = DB::table('transactions_1513991762415000038187743')->where('action' , 'SUBSCRIPTION')->count();
        $total = DB::table('transactions_1513991762415000038187743')->count();
        $totalcharge = DB::table('transactions_1513991762415000038187743')->where( 'action' , 'AUTO_CHARGE')->orwhere( 'action' , 'SUBSCRIPTION')->count();
        return view('dashboard' , [ 'autocharges' => $autocharges , 'unsubs' => $unsubs , 'subs'=>$subs , 'total'=> $total , 'totalcharge'=>$totalcharge]);
    }
}
