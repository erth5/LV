@extends('layout')

@section('title', 'Table')
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
<input type="submit" value="Submit" name="submit_button">
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
            <th>editor(auto)</th>
            <th>Word1</th>
            <th>Word2</th>
            <th>Word3</th>
        </tr>

        @foreach($data as $column)
            <tr>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->timestamps}}">
                    </form></td>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->editor}}">
                    </form></td>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word1}}">
                    </form></td>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word2}}">
                    </form></td>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word3}}">
                    </form></td>
            </tr>
        @endforeach
</table>
<input type="submit" value="Submit" name="submit_button">

@endsection

