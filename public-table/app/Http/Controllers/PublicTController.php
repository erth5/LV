<?php

namespace App\Http\Controllers;

use App\Models\PublicT;
use Illuminate\Http\Request;

class PublicTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Daten auslesen und anzeigen
        $data = PublicT::all();
        return view('sites.public', compact('data'));
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
     * @param  \App\Models\PublicT  $publicT
     * @return \Illuminate\Http\Response
     */
    public function show(PublicT $publicT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicT  $publicT
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicT $publicT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicT  $publicT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicT $publicT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicT  $publicT
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicT $publicT)
    {
        //
    }
}
