<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = DB::select('select service_name from service_details2');

        return view('servicesSummary',['services'=>$services]);
    }
}
