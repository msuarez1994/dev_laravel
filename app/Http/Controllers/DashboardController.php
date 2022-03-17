<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\ChartInvoce;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(ChartInvoce $chart)
    {
        return view('dashboard.index', ['chart' => $chart->build()]);
    }
}
