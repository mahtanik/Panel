<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function counter()
    {
        //Summary of the data and changes in all services
        $autocharges1 = DB::table('transactions_1513991762415000038187743')->where('action', 'AUTO_CHARGE')->count();
        $autocharges2 = DB::table('transactions_1513991762415000000015575')->where('action', 'AUTO_CHARGE')->count();
        $autocharges = $autocharges1 + $autocharges2;

        $unsubs1 = DB::table('transactions_1513991762415000038187743')->where('action', 'UNSUBSCRIPTION')->count();
        $unsubs2 = DB::table('transactions_1513991762415000000015575')->where('action', 'UNSUBSCRIPTION')->count();
        $unsubs = $unsubs1 + $unsubs2;

        $subs = DB::table('transactions_1513991762415000038187743')->where('action', 'SUBSCRIPTION')->count();

        $total1 = DB::table('transactions_1513991762415000038187743')->count();
        $total2 = DB::table('transactions_1513991762415000000015575')->count();
        $total = $total1 + $total2;

        $totalcharge1 = DB::table('transactions_1513991762415000038187743')->where('action', 'AUTO_CHARGE')->orwhere('action', 'SUBSCRIPTION')->count();
        $totalcharge2 = DB::table('transactions_1513991762415000000015575')->where('action', 'AUTO_CHARGE')->orwhere('action', 'SUBSCRIPTION')->count();
        $totalcharge = $total + $total2;

        // calcularing the top four services to dispaly in donut-chart
        $topfour = DB::select('SELECT count(*)  as value, service_name as name FROM `tb_transactions` join service_details2 on  service_details2.service_id =  tb_transactions.serviceId where action="SUBSCRIPTION" or action="AUTO_CHARGE" GROUP by service_name ORDER by COUNT(*) DESC ');

        //bar chart -- total users and total charges for each month
        $months = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
        $total_users = array();
        $total_charges = array();

        foreach ($months as $month) {
            $total_users[$month] = DB::table('tb_transactions')->where('action' , 'SUBSCRIPTION')->orWhere('action' , 'AUTO_CHARGE')->where('CreatedOn' ,'like' ,  "2018-$month%")->count();
            $total_charges[$month] = DB::table('tb_transactions')->where('action' , 'AUTO_CHARGE')->where('CreatedOn' ,'like' ,  "2018-$month%")->count();
    }

        return view('dashboard' , ['total_charges'=>$total_charges  , 'total_users'=>$total_users , 'autocharges' => $autocharges , 'unsubs' => $unsubs , 'subs'=>$subs , 'total'=> $total , 'totalcharge'=>$totalcharge , 'topfour'=> $topfour]);
    }
}
