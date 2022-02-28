<?php

namespace App\Http\Controllers;

use App\Models\ChainT;
use Illuminate\Http\Request;

class ChainTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ChainT::all();
        return view('sites.chain', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChainT  $chainT
     * @return \Illuminate\Http\Response
     */
    public function show(ChainT $chainT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChainT  $chainT
     * @return \Illuminate\Http\Response
     */
    public function edit(ChainT $chainT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChainT  $chainT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChainT $chainT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChainT  $chainT
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChainT $chainT)
    {
        //
    }
}
