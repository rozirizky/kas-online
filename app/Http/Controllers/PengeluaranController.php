<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pengeluaran;
use App\Http\Requests\StorePengeluaranRequest;
use App\Http\Requests\UpdatePengeluaranRequest;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $id = auth()->user()->id;
        $pengeluaran = Pengeluaran::where('user_id','=', $id)->latest()->get();
        return view('admin.pengeluaran.index',compact('pengeluaran'));
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
    public function store(StorePengeluaranRequest $request)
    {
        $request->validate([
            'pengeluaran' => 'required',
            'jumlah' => 'required',
        ]);

        $tanggal = Carbon::today()->format('d-m-Y');

        Pengeluaran::create([
            'user_id' => auth()->user()->id,
            'pengeluaran' => $request->pengeluaran,
            'jumlah' => $request->jumlah,
            'tanggal' => $tanggal,
        ]);

        return redirect()->route('tampilpengeluaran');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengeluaranRequest $request, Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengeluaran $pengeluaran)
    {
        //
    }
}
