<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Http\Requests\StorememberRequest;
use App\Http\Requests\UpdatememberRequest;
use App\Models\Transaksi;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->user()->id;
        $member = member::where('user_id','=', $id)->get();
        
    
        
        return view('admin.member.member',compact('member'));

    }

   

    /**
     * Show the form for creating a new resource.
     */
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorememberRequest $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        member::create(
            [
'nama' => $request->nama,
'user_id' => auth()->user()->id,
'kas' => 0
            ]
            );

            return redirect()->route('member');
    }

    /**
     * Display the specified resource.
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatememberRequest $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
