<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function show()
    {
        $user_msisdn = DB::table('tb_transactions')->pluck('msisdn');
        $user_action = DB::table('tb_transactions')->pluck('action');
        $action_date = DB::table('tb_transactions')->pluck('CreatedOn');
        $service_id = DB::table('tb_transactions')->pluck('serviceId');

        $service_name = array();
//
//        $i = 0;
//
//        foreach ($service_id as $id) {
//            $service_name[$i] = DB::table('service_details2')->where('service_id', $id)->pluck('service_name');
//            $i++;
//        }

        return view( 'usersPage'  ,  compact('user_msisdn' , 'user_action' , 'action_date' , 'service_name' , 'service_id'));
    }
}
