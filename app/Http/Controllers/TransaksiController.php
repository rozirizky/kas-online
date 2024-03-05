<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\member;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  {
        $id = auth()->user()->id;
        
        $transaksi = Transaksi::where('user_id','=', $id)->latest()->get();

        return view('admin.transaksi.index',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiRequest $request)
    {
        $request->validated([
            'transaksi' => 'required',
        ]);

        $tanggal = Carbon::today()->format('d-m-Y');

        Transaksi::create([
            'transaksi' => $request->transaksi,
        'member_id' => $request->idmember,
        'tanggal' => $tanggal,
        'user_id' => auth()->user()->id
        ]
        );

        $member = member::findOrFail($request->idmember);

     $total =   $member->kas + $request->transaksi;

     $member->update([
        'kas' => $total
     ]);

        return redirect()->route('member');
    }

    /**
     * Display the specified resource.
     */
    public function search(Transaksi $transaksi)
    {
        $id = auth()->user()->id;
        
        $transaksi = Transaksi::where('name ')->latest()->get();

        return view('admin.transaksi.index',compact('transaksi'));


      }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
