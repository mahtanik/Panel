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
    public function Fill_init()
    {
        $services = DB::select('select service_name from service_details2');
        return view('servicesDiagrams' , compact('services'));
    }

    public function Fill(Request $request)
    {
        $service = $request->get('s');
        $current_month = $request->get('mm');
        $current_year = $request->get('y');

        $id = DB::table('service_details2')->where('service_name' , $service)->pluck('service_id')->first();
        $autocharges = DB::table('tb_transactions')->select('action')->where('serviceId', $id)->where('action', 'AUTO_CHARGE')->get()->count();
        $unsubs = DB::table('tb_transactions')->select('action')->where('serviceId',$id)->where('action', 'UNSUBSCRIPTION')->get()->count();
        $subs = DB::table('tb_transactions')->select('action')->where('serviceId',$id)->where('action', 'SUBSCRIPTION')->get()->count();
        $total = DB::table('tb_transactions')->select('action')->where('serviceId',$id)->get()->count();
        $totalcharges = DB::table('tb_transactions')->select('action')->where('serviceId',$id)->where( 'action' , 'AUTO_CHARGE')->orwhere( 'action' , 'SUBSCRIPTION')->count();

        $months = array();
        $years = array();
        for ($i = 0 ; $i < 3 ; $i++){
            $months[$i] =  $current_month - $i ;
            $years[$i] = $current_year;
            if ($current_month - $i == 0 ) {
                $months[$i] = '12';
                $years[$i] = $current_year -1;
            }
            if ($current_month - $i == -1 ) {
                $months[$i] = '11';
                $years[$i] = $current_year -1;
            }
            if ($current_month - $i == -2 ) {
                $months[$i] = '10';
                $years[$i] = $current_year -1;
            }
        }

        $bar_subs = array();
        $bar_unsubs = array();
        $bar_auto = array();
        $bar_total = array();

        $j = 0;
        //heavy
        foreach ($months as $month){
            if ($j > 3)
                break;
            $year = $years[$j];
            $bar_subs[$j] = DB::table('tb_transactions')->select('action')->where('CreatedOn' ,'like' ,  "$year-0$month%")->where('serviceId' , $id)->where('action' , 'SUBSCRIPTION')->get()->count();
            $bar_unsubs[$j] = DB::table('tb_transactions')->select('action')->where('CreatedOn' ,'like' ,  "$year-0$month%")->where('serviceId' , $id)->where('action' , 'UNSUBSCRIPTION')->get()->count();
            $bar_auto[$j] = DB::table('tb_transactions')->select('action')->where('CreatedOn' ,'like' ,  "$year-0$month%")->where('serviceId' , $id)->where('action' , 'AUTO_CHARGE')->get()->count();
            $bar_total[$j] = $bar_auto[$j] + $bar_subs[$j];
            $j++;
        }

        return compact('autocharges' , 'subs' , 'unsubs' , 'totalcharges' , 'total' , 'id' , 'bar_subs' , 'months' , 'years' , 'bar_unsubs' , 'bar_total');
    }

}
