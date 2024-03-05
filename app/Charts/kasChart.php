<?php

namespace App\Charts;

use App\Models\member;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class kasChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
      
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $id = auth()->user()->id;
        return $this->chart->barChart()
        
            ->setTitle('Total kas terbanyak')
           
            
            ->addData('Total', member::where('user_id','=', $id)->orderBy('kas','desc')->limit(5)->pluck('kas')->toArray() )
            ->setHeight(500)
            ->setLabels(member::where('user_id','=', $id)->orderBy('kas','desc')->limit(5)->pluck('nama')->toArray());
           
           
    }
}
