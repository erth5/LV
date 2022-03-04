@extends('layout')

@section('title', 'Public Table')
@section('content')

    <div class="center">
        <h1>This is the public Table</h1>
    </div>

    <!-- Project tabeler dynamic -->
    <form method="post" action="{{url('/show-public')}}">
        <input type="submit" value="Show First Line only" name="submit_button" class="uniqua">
    </form>

    <form method="post" action={{url('/update-public')}}>
    <table>
        <tr>
            <th>Date</th>
            <th>Autor</th>
            <th>Argument 1</th>
            <th>Argument 2</th>
            <th>Argument 3</th>
        </tr>

        @foreach($data as $column)
            <tr>
                <td>{{$column->date}}</td>
                <td>
                    <label>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->editor}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word1}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word2}}">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word3}}">
                    </label>
                </td>
            </tr>
        @endforeach
    </table>
    <input type="submit" value="Submit Data" name="submit_button" class="dropa">
    </form>
@endsection

