<?php

namespace App\Http\Controllers;

use App\Models\DifferentT;
use Illuminate\Http\Request;

class DifferentTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DifferentT::all();
        return view('sites.different', compact('data'));
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
     * @param  \App\Models\DifferentT  $differentT
     * @return \Illuminate\Http\Response
     */
    public function show(DifferentT $differentT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DifferentT  $differentT
     * @return \Illuminate\Http\Response
     */
    public function edit(DifferentT $differentT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DifferentT  $differentT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DifferentT $differentT)
    {
        $data = DifferentT::all();

        if($request->plus != null && $request->minus != null){
            $dat = new DifferentT();
            $dat->plus = $request->plus;
            $dat->minus = $request->minus;
            $save = $dat->saveOrFail();
        }
        //dd($request->plus);
        $data = DifferentT::all();
        return view('sites.different', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DifferentT  $differentT
     * @return \Illuminate\Http\Response
     */
    public function destroy(DifferentT $differentT)
    {
        //
    }
}
