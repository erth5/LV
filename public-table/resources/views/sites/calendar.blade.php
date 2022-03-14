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
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>

            @foreach($data as $dat)
            <tr>
                <td>
                    <label>
                        <input type="text" name="editor" maxlength="255"
                               autocomplete="on" placeholder="{{$dat->editor}}">
                    </label>
                </td>
                <td>
                    <label>
                        <!--    Form by https://laravel.com/docs/4.2/html not found from laravel
                         Form::checkbox("chcbox1$dat->mo", 'true') !!}
                            -->
                        <input value="true" type="checkbox" name="chcbox1{{$dat->id}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input value="true" type="checkbox" name="chcbox2{{$dat->id}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox3{{$dat->id}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox4{{$dat->id}}" placeholder="{{$dat->th}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox5{{$dat->id}}" placeholder="{{$dat->fr}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox6{{$dat->id}}" placeholder="{{$dat->sa}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox7{{$dat->id}}" placeholder="{{$dat->so}}">
                    </label>
                </td>
            </tr>
            @endforeach
        </table>
        <input class="dropa" type="submit" value="Save Data" name="submit_button">
    </form>
@endsection




