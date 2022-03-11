@extends('layout')
@section('title', 'Calendar')

@section('content')

    @php
        // Project date finder
        /*
        Week
        User(auto ID and manual)

        Monday
        Tuesday
        Wednesday
        Thursday
        Friday
        Saturday
        Sunday
        */
    @endphp

    <div class="center">
        <h1>This is a Calendar</h1>
    </div>


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


        @foreach($data as $dat)
            <tr>
                <td>
                    <label>
                        <input type="text" name="editor" maxlength="255" autocomplete="on" placeholder="I`m here">
                    </label>
                </td>
                <dt>
                    <label>
                        <input type="radio" name="">
                    </label>
                </dt>
            </tr>
        @endforeach
        </table>

    <form method="post" action="{{url('/update-table')}}">
    </form>

@endsection




