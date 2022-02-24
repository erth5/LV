@extends('layout')

@section('Home', 'Table')
@section('content')

<?php /*
    $obj = array("Oone", "Osec", "Othird")
    foreach ($obj as $e) {
        echo $e
    }

    $obj = array("Oone", "Osec", "Othird")
    @foreach ($obj as $e)
        echo $obj
    @endforeach
*/?>

    <div class="center">
        <h1>This is public free data table number one</h1>
    </div>

    <!-- Project tabeler static -->
    <input type="submit" value="Submit">
    <table>
        <tr>
            <th>Date</th>
            <th>User(auto)</th>
            <th>Word1</th>
            <th>Word2</th>
            <th>Word3</th>
        </tr>
        <tr>
            <td>{{$openingText= "hello"}}</td>
            <td>
                <form action="/action_page.php"><input type="text" id="?" name="?"></form>
            </td>
            <td>
                <form><input type="text" id="fname" name="fname" placeholder="your text"></form>
            </td>
            <td>
                <form><input type="text" id="fname" name="fname"></form>
            </td>
            <td>
                <form><input type="text" id="fname" name="fname"></form>
            </td>
        </tr>
        <tr>
            <td>{{$openingText}}</td>
            <td>{{$openingText}}</td>
            <td>{{$openingText}}</td>
            <td>{{$openingText}}</td>
            <td>{{$openingText}}</td>
        </tr>
    </table>


    <table>
        <tr>
            <th>Date</th>
            <th>User(auto)</th>
            <th>Word1</th>
            <th>Word2</th>
            <th>Word3</th>
        </tr>
        @foreach($data as $dat)
            <td>{{$dat->user}}</td>
            <td>{{$dat->word1}}</td>
            <td>{{$dat->word2}}</td>
            <td>{{$dat->word3}}</td>
        @endforeach
    </table>
    <input type="submit" value="Submit">

@endsection

