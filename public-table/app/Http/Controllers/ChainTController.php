<?php

namespace App\Http\Controllers;

use App\Models\ChainT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*  Example
        $dat = new ChainT;
        $dat->date = 20220303;
        $dat->editor = "The King of Sex";
        $dat->word = "I was here";
        $save = $dat->saveOrFail();
        echo $save;
        */

        // Proof Session ID
        $session_ID = Cookie::get('laravel_session');
        $data = ChainT::all();
        $dopple_user_warning = 'You have alraedy write a line in this row';
        foreach ($data as $editor_ID)
            if ($session_ID == $editor_ID->editor) {
                return view('sites.chain', compact('data'), compact('dopple_user_warning'));
            }
        // save new message
        $dat = new ChainT;
        $dat->date = date(now());
        $dat->editor = $session_ID;
        $dat->word = $request->word;
        //  session are not cookies (gives array back)
        //$dat->editor = $request->session()->all();
        $save = $dat->saveOrFail();
        $data = ChainT::all();
        return view('sites.chain', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ChainT $chainT
     * @return \Illuminate\Http\Response
     */
    public function show(ChainT $chainT)
    {
        //$dat = ChainT::TODO
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ChainT $chainT
     * @return \Illuminate\Http\Response
     */
    public function edit(ChainT $chainT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ChainT $chainT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChainT $chainT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ChainT $chainT
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChainT $chainT)
    {
        //
    }
}
