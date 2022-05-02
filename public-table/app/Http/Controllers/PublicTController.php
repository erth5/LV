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
     * @param \App\Models\PublicT $publicT
     * @return \Illuminate\Http\Response
     */
    public function show(PublicT $publicT)
    {
        $rowID = 1;
        $data = PublicT::find($rowID);
        dd($data);
        return view('sites.public_single_line', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\PublicT $publicT
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicT $publicT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PublicT $publicT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicT $publicT)
    {
        $data = PublicT::all();
        if (isset($_POST['submit_all_button'])) {
            $current_line = 0;

            foreach ($data as $dat) {
                $current_line = $dat->id;
                $changed = false;

                $res = "editor" . $current_line;
                if ($request->$res != null) {
                    $dat->editor = $request->$res;
                    $changed = true;
                }

                $res = "word1" . $current_line;
                if ($request->$res != null) {
                    $dat->word1 = $request->$res;
                    $changed = true;
                }

                $res = "word2" . $current_line;
                if ($request->$res != null) {
                    $dat->word2 = $request->$res;
                    $changed = true;
                }

                $res = "word3" . $current_line;
                if ($request->$res != null) {
                    $dat->word3 = $request->$res;
                    $changed = true;
                }

                if ($changed == true)
                    $dat->date = date(now());

                $save = $dat->saveOrFail();
            }
        } elseif (isset($_POST['show_first_button'])) {
            /*
            *   possible calling function show with same content
            *   https://dev-ani.com/calling-a-laravel-controller-method-to-another-controller/
            */

            $rowID = 1;
            $data = PublicT::find($rowID);
            return view('sites.public_single_line', compact('data'));


        } else {  //Data per Line
            $line_number = -1;
            if (isset($_POST['submit_button_1']))
                $line_number = 0;
            if (isset($_POST['submit_button_2']))
                $line_number = 1;
            if (isset($_POST['submit_button_3']))
                $line_number = 2;
            if (isset($_POST['submit_button_4']))
                $line_number = 3;
            if (isset($_POST['submit_button_5']))
                $line_number = 4;
            if (isset($_POST['submit_button_6']))
                $line_number = 5;
            if (isset($_POST['submit_button_7']))
                $line_number = 6;
            if (isset($_POST['submit_button_8']))
                $line_number = 7;
            if (isset($_POST['submit_button_9']))
                $line_number = 8;
            if (isset($_POST['submit_button_10']))
                $line_number = 9;
            if (isset($_POST['submit_button_11']))
                $line_number = 10;
            if (isset($_POST['submit_button_12']))
                $line_number = 11;

            $dat = $data[$line_number];
            //dd($dat);
            $currentLine = $dat->id;
            $dat->date = date(now());

            $res = "editor" . $currentLine;
            if ($request->$res != null) {
                $dat->editor = $request->$res;
                /*
                dd("gewählte Zeile:", $currentLine,
                    "String zum auslesen der Werte",
                    $res, "ausgelesener Wert:", $request->$res);
                */
            }

            $res = "word1" . $currentLine;
            if ($request->$res != null)
                $dat->word1 = $request->$res;

            $res = "word2" . $currentLine;
            if ($request->$res != null)
                $dat->word2 = $request->$res;

            $res = "word3" . $currentLine;
            if ($request->$res != null)
                $dat->word3 = $request->$res;
            $save = $dat->saveOrFail();
        }
        return view('sites.public', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\PublicT $publicT
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicT $publicT)
    {
        //
    }
}
