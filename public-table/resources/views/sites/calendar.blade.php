@extends('layout')
@section('title', 'Calendar')
@section('content')

    <div class="center">
        <h1>This is a Calendar</h1>
    </div>

    <form method="post" action="{{url('/update-calendar')}}">
        @csrf
        <table>
            <tr>
                <th>Name</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>

            <tr>
                <td>
                    <label>
                        <input type="text" name="editor" maxlength="255" autocomplete="on" placeholder="I`m here">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox">
                    </label>
                </td>
            </tr>

        </table>
        <input class="dropa" type="submit" value="Save Data" name="submit_button">
    </form>
@endsection




