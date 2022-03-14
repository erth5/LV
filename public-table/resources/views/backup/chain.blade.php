@extends('layout')
@section('title', 'Chain')

@section('content')

    <div class="center">
        <h1>This is the public Chain-Table</h1>
    </div>

    <!-- Project tabeler dynamic -->
    <table>
        <tr>
            <th>Date</th>
            <th>editor(auto)</th>
            <th>Word</th>
        </tr>
        @foreach($data as $column)
            <tr>
                <td>{{$column->date}}</td>
                <td>{{$column->editor}}</td>
                <td>{{$column->word}}</td>
            </tr>
        @endforeach
        <tr>
            <td>Timestamp</td>
            <td>
                <form>
                    <input type="text" maxlength="255" autocomplete="on" placeholder="your ID">
                </form>
            </td>
            <td>
                <form>
                    <input type="text" maxlength="255" autocomplete="on" placeholder="Your Text">
                </form>
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit" name="submit_button" class="dropa">

    <p>
        {{$dat->editor}}
    </p>
@endsection
