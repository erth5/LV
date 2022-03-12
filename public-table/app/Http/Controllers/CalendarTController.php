<?php

namespace App\Http\Controllers;

use App\Models\CalendarT;
use Illuminate\Http\Request;

class CalendarTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CalendarT::all();
        return view('sites.calendar', compact('data'));
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
     * @param  \App\Models\CalendarT  $calendarT
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarT $calendarT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CalendarT  $calendarT
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarT $calendarT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CalendarT  $calendarT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarT $calendarT)
    {
        $data = CalendarT::all();
        $current_line = 0;
        foreach ($data as $dat){
            $current_line = $dat->id;
            $res = "editor".$current_line;
            if ($request->$res != null){
                $dat->editor = $request->$res;
            }
            // TODO
        }
        return view('sites.calendar', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CalendarT  $calendarT
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarT $calendarT)
    {
        //
    }
}
