<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perdedu;
use Illuminate\Support\Facades\DB;

class PerdeduController extends Controller
{
    public function index()
    {
        //$pv = VehicleFleet::where('pv_modulo', '=', 1)->get();
        $per_page = \Request::get('per_page') ?: 20;
        $pv = DB::connection('pgsql3')
        ->table('trabajador_nomina_perdedu_base')
        ->paginate($per_page);
        //->get();
        

        return $pv;
    }
}
