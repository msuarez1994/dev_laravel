<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VehicleFleet;
use Illuminate\Support\Facades\DB;

class controllerVehicleFleet extends Controller
{
    public function index()
    {
        //$pv = VehicleFleet::where('pv_modulo', '=', 1)->get();
        $per_page = \Request::get('per_page') ?: 20;
        $pv = DB::connection('pgsql2')
        ->table('pv')
        ->select('pv_eco','pv_modulo','pv_estatus')
        ->where('pv_modulo', '=', '1')
        ->paginate($per_page);
        //->get();
        

        return $pv;
    }
}
