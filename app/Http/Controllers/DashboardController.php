<?php

namespace App\Http\Controllers;

use App\Charts\kasChart;
use App\Charts\totalchart;
use App\Models\member;
use App\Models\Transaksi;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(kasChart $chart,totalchart $charte)  {
         $id = auth()->user()->id;
        
        $transaksi = Transaksi::where('user_id','=', $id)->latest()->limit(7)->get();
        $pengeluaran = Pengeluaran::where('user_id','=', $id)->latest()->limit(6)->get();
        $total = Pengeluaran::where('user_id','=', $id)->sum('jumlah');
        $kas = member::where('user_id','=', $id)->sum('kas');

        $subtotal = $kas - $total;
       

        return view('admin.dashboard',compact('transaksi','pengeluaran','total','kas','subtotal'),['chart' => $chart->build(), 'chart2' => $chart->build()]);
    }
}
