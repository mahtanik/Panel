<?php

namespace App\Http\Controllers;
use function Couchbase\defaultDecoder;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class ServiceDiagramsController extends Controller
{
//     public function Diagrams(Request $request)
//    {
////        $month = $request->get('mm');
////        $serviceId = $request->get('ss');
////
////        //Data for Diagrams - since we show for 3 different months, we calculate from current month and month-1 and month-2
////
////        $autocharge1 = DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'AUTO_CHARGE')->whereMonth('CreatedOn' , $month)->count();
////        $autocharge2 = DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'AUTO_CHARGE')->whereMonth('CreatedOn' , $month-1)->count();
////        $autocharge3 = DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'AUTO_CHARGE')->whereMonth('CreatedOn' , $month-2)->count();
////
////        $unsub1 = DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'UNSUBSCRIPTION')->whereMonth('CreatedOn' , $month)->count();
////        $unsub2 = DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'UNSUBSCRIPTION')->whereMonth('CreatedOn' , $month-1)->count();
////        $unsub3 = DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'UNSUBSCRIPTION')->whereMonth('CreatedOn' , $month-2)->count();
////
////        $sub1 = DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'SUBSCRIPTION')->whereMonth('CreatedOn' , $month)->count();
////        $sub2 = DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'SUBSCRIPTION')->whereMonth('CreatedOn' , $month-1)->count();
////        $sub3= DB::table('tb_transactions')->where('serviceId',$serviceId)->where('action', 'SUBSCRIPTION')->whereMonth('CreatedOn' , $month-2)->count();
////
////        $total1 = DB::table('tb_transactions')->where('serviceId',$serviceId)->whereMonth('CreatedOn' , $month)->count();
////        $total2 = DB::table('tb_transactions')->where('serviceId',$serviceId)->whereMonth('CreatedOn' , $month-1)->count();
////        $total3 = DB::table('tb_transactions')->where('serviceId',$serviceId)->whereMonth('CreatedOn' , $month-2)->count();
////
////        return compact( 'autocharge1' , 'autocharge2' , 'autocharge3' , 'sub1' , 'sub2' , 'sub3' , 'unsub1' , 'unsub2' , 'unsub3' , 'total1' , 'total2' , 'total3' , 'month');
//
//        //return compact('autocharge1' , 'sub1' , 'unsub1' ,'total1' , 'month');
//
//        $month = $request->get('month');
//        $service = $request->get('s');
//        $id = DB::table('service_details2')->select('service_id')->where('service_name' , $service)->pluck('service_id')->first();
//
//        $sub = array();
//        $unsub = array();
//        $autocharg = array();
//
//        for ($i = 0 ; $i < 2 ; $i++){
//            $sub[i] = DB::table('tb_transactions')->where('serviceId',$id)->where('action', 'SUBSCRIPTION')->whereMonth('CreatedOn' , ($month - $i))->count();
//            $unsub[i] = DB::table('tb_transactions')->where('serviceId',$id)->where('action', 'SUBSCRIPTION')->whereMonth('CreatedOn' , ($month- $i))->count();
//            $autocharg[i] = DB::table('tb_transactions')->where('serviceId',$id)->where('action', 'SUBSCRIPTION')->whereMonth('CreatedOn' , ($month- $i))->count();
//        }
//
//        return compact('sub' , 'unsub' , 'autocharg');
//
//    }

    public function Fill_init()
    {
        $services = DB::select('select service_name from service_details2');
        return view('servicesDiagrams' , compact('services'));
    }

    public function Fill(Request $request)
    {
        $service = $request->get('s');
        $current_month = $request->get('mm');

        $id = DB::table('service_details2')->select('service_id')->where('service_name' , $service)->pluck('service_id')->first();
        $autocharges = DB::table('tb_transactions')->where('serviceId', $id)->where('action', 'AUTO_CHARGE')->get()->count();
        $unsubs = DB::table('tb_transactions')->where('serviceId',$id)->where('action', 'UNSUBSCRIPTION')->get()->count();
        $subs = DB::table('tb_transactions')->where('serviceId',$id)->where('action', 'SUBSCRIPTION')->get()->count();
        $total = DB::table('tb_transactions')->where('serviceId',$id)->get()->count();
        $totalcharges = DB::table('tb_transactions')->where('serviceId',$id)->where( 'action' , 'AUTO_CHARGE')->orwhere( 'action' , 'SUBSCRIPTION')->count();

//        //Diagrams
//        $bar_subs = array();
//        for ($i = 0 ; $i < 2 ; $i++){
//            $bar_subs[$i] = DB::table('tb_transactions')->where('serviceId',$id)->where('action', 'SUBSCRIPTION')->where('CreatedOn' , 'like' , '%'.$month - $i.'%')->get()->count();
//            //$bar_subs[$i] = DB::table('tb_transactions')->where('serviceId',$id)->where('action', 'SUBSCRIPTION')->whereMonth('CreatedOn' , '03' )->count();
//        }
//
//        //$bar_subs = DB::table('tb_transactions')->where('CreatedOn' , 'like' , '%'.'2018-03'.'%')->get()->count();

        $months = array();
        for ($i = 0 ; $i < 3 ; $i++){
            $months[$i] = $current_month - $i ;
            if ($current_month - $i == 0 )
                $months[$i] = '12';
            if ($current_month - $i == -1 )
                $months[$i] = '11';
        }
//        dd($months);

        $bar_subs = array();
        $bar_unsubs = array();
        $bar_auto = array();
        $bar_total = array();

        foreach ($months as $month){
            $bar_subs[$month] = DB::table('tb_transactions')->where('CreatedOn' ,'like' ,  "2018-0$month%")->where('serviceId' , $id)->where('action' , 'SUBSCRIPTION')->get()->count();
            $bar_unsubs[$month] = DB::table('tb_transactions')->where('CreatedOn' ,'like' ,  "2018-0$month%")->where('serviceId' , $id)->where('action' , 'UNSUBSCRIPTION')->get()->count();
            $bar_auto[$month] = DB::table('tb_transactions')->where('CreatedOn' ,'like' ,  "2018-0$month%")->where('serviceId' , $id)->where('action' , 'AUTO_CHARGE')->get()->count();
            $bar_total[$month] = $bar_auto[$month] + $bar_subs[$month];
        }

        return compact('autocharges' , 'subs' , 'unsubs' , 'totalcharges' , 'total' , 'id' , 'bar_subs' , 'months' , 'bar_unsubs' , 'bar_total');
    }

}
