<?php

namespace App\Http\Controllers;

use function Couchbase\defaultDecoder;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ServiceController extends Controller
{
    public function service_summary()
    {
        $services = DB::select('select service_name from service_details2');
        $selectedService = Input::get('selectService');
        $id = DB::table('service_details2')->select('service_id')->where('service_name' , $selectedService)->pluck('service_id')->first();
        $details = DB::select('select CreatedOn,SUM(CASE WHEN action="SUBSCRIPTION" THEN 1 ELSE 0 END) AS "SUBSCRIPTION",SUM(CASE WHEN action="UNSUBSCRIPTION" THEN 1 ELSE 0 END) AS "UNSUBSCRIPTION",SUM(CASE WHEN action="AUTO_CHARGE" THEN 1 ELSE 0 END) AS "AUTO_CHARGE" from tb_transactions GROUP BY serviceId,CreatedOn ORDER BY CreatedOn ');
        $allusers = DB::table('tb_users')->select('status')->where('service_id',$id)->where('status','sub')->count();

        return view('servicesSummary', ['id'=>$id , 'allusers'=>$allusers ,  'id'=>$id , 'details'=>$details  , 'services' => $services , 'selectedService' => $selectedService]);
    }

    //serviceSummary Page
    public function updateUsersRecord(Request $request){

        $date = $request->get('dd');
        $serviceId = $request->get('ss');

        $j = 0;
        $users = DB::table('tb_transactions')->select('msisdn' , 'action')->where('serviceId' , $serviceId)->whereDate('CreatedOn' , $date)->get();
        foreach ($users as $user) {
            $user_number[$j] = $user->msisdn;
            $user_action[$j] = $user->action;
            $j++;
        }

        return compact('user_number' , 'user_action' );
    }

    //servicesPage
    public function allUsersRecord(Request $req){

        $date = $req->get('date');
        $serviceId = $req->get('service');

        $j = 0;
        $users = DB::table('tb_users')->where('service_id' , $serviceId)->where('CreatedOn' , $date)->get();
        foreach ($users as $user) {
            $user_numbers[$j] = $user->msisdn;
            $user_charges[$j] = $user->auto_charge;
            $user_certificate[$j] = $user->certification;
            $user_status[$j] = $user->status;
            $user_CreatedOn[$j] = $user->CreatedOn;
            $j++;
        }

        return compact('user_numbers' , 'user_status' , 'user_charges' , 'user_certificate' , 'user_CreatedOn');
    }

    public function services()
    {
        $services = DB::select('select service_name from service_details2');

        $selectedService = Input::get('selectService');
        $id = DB::table('service_details2')->select('service_id')->where('service_name', $selectedService)->pluck('service_id')->first();

        $date = DB::table('tb_transactions')->where('serviceId', $id)->distinct('CreatedOn')->pluck('CreatedOn');
        $i = 0;
        $subs = array();
        $unsubs = array();
        $autocharges = array();

        foreach ($date as $day) {
            $subs[$i] = DB::table('tb_transactions')->where('action', 'SUBSCRIPTION')->where('serviceId', $id)->whereDate('CreatedOn', $day)->count();
            $unsubs[$i] = DB::table('tb_transactions')->where('action', 'UNSUBSCRIPTION')->where('serviceId', $id)->whereDate('CreatedOn', $day)->count();
            $autocharges[$i] = DB::table('tb_transactions')->where('action', 'AUTO_CHARGE')->where('serviceId', $id)->whereDate('CreatedOn', $day)->count();
            $i++;
        }

        return view('services', ['id'=>$id   , 'date' => $date, 'services' => $services, 'selectedService' => $selectedService, 'ids' => $id, 'subs' => $subs, 'unsubs' => $unsubs, 'autocharges' => $autocharges]);

    }


}
