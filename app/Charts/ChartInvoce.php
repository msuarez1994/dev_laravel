<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class ChartInvoce
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 

    public function build()
    {
        return $this->chart->barChart()
            ->setTitle('Listado de venta modular')
            ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
            ->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->addData('Demo', [0, 0, 7, 3, 8, 2])
            ->setXAxis(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio']);
    }
}