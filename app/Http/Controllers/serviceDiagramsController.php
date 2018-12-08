<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviceDiagramsController extends Controller
{
    public function Fill()
    {
        $services = DB::select('select service_name from service_details2');
        $details = DB::select('select * FROM transactions_1513991762415000038187743');
        $autocharges = DB::table('transactions_1513991762415000038187743')->where('action', 'AUTO_CHARGE')->count();
        $unsubs = DB::table('transactions_1513991762415000038187743')->where('action', 'UNSUBSCRIPTION')->count();
        $subs = DB::table('transactions_1513991762415000038187743')->where('action', 'SUBSCRIPTION')->count();
        $total = DB::table('transactions_1513991762415000038187743')->count();
        $totalcharges = DB::table('transactions_1513991762415000038187743')->where( 'action' , 'AUTO_CHARGE')->orwhere( 'action' , 'SUBSCRIPTION')->count();

        return view('servicesDiagrams', ['services'=>$services , 'details'=>$details , 'autocharges' => $autocharges, 'unsubs' => $unsubs, 'subs' => $subs, 'total' => $total , 'totalcharges' => $totalcharges ]);

    }

}
