<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /* by Tutorial https://www.tutorialspoint.com/laravel/laravel_session.htm
     * http://localhost:8000/session/set
     * http://localhost:8000/session/get
     * http://localhost:8000/session/remove
     */

    public function accessSessionData(Request $request)
    {
        if ($request->session()->has('session-key'))
            echo $request->session()->get('session-key');
        else
            echo 'No data in the session';
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('session-key', 'TODO: increment session');
        echo "Data has been added to session";
    }

    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('session-key');
        echo "Data has been removed from session.";
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Session $session
     * @return \Illuminate\Http\Response
     */
    public function show(Session $session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Session $session
     * @return \Illuminate\Http\Response
     */
    public function edit(Session $session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Session $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Session $session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Session $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
        //
    }
}
