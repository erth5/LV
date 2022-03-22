@extends('layout')
@section('title', 'Public Table')
@section('content')

    @php
        $rownumber = 1
    @endphp

    <div class="center">
        <h1>This is the public Table</h1>
    </div>

    <form method="post" action="{{url('/update-public')}}">
    @csrf <!-- to avoid 419-page error -->
        <input type="submit" value="Show Only First Line" name="show_first_button" class="uniqua">

        <table>
            <tr>
                <th>Save Date</th>
                <th>Autor</th>
                <th>Argument 1</th>
                <th>Argument 2</th>
                <th>Argument 3</th>
                <th>Save Data per Line</th>
            </tr>

            @foreach($data as $column)
                <tr>
                    <td class="center" class="only_out">{{$column->date}}</td>
                    <td>
                        <label>
                            <input name="editor{{$column->id}}" type="text" maxlength="255" autocomplete="on"
                                   placeholder="{{$column->editor}}">
                        </label>
                    </td>
                    <td>
                        <label>
                            <input name="word1{{$column->id}}" type="text" maxlength="255" autocomplete="on"
                                   placeholder="{{$column->word1}}">
                        </label>
                    </td>
                    <td>
                        <label>
                            <input name="word2{{$column->id}}" type="text" maxlength="255" autocomplete="on"
                                   placeholder="{{$column->word2}}">
                        </label>
                    </td>
                    <td>
                        <label>
                            <input name="word3{{$column->id}}" type="text" maxlength="255" autocomplete="on"
                                   placeholder="{{$column->word3}}">
                        </label>
                    </td>
                    <td class="sub_unique">
                        <input type="submit" value="Save Data row {{$rownumber}}" name="submit_button_{{$rownumber++}}">
                    </td>
                </tr>
            @endforeach

        </table>

        <input type="submit" value="Save all Data" name="submit_all_button" class="dropa">
    </form>

    <p class="center"> Like Static </p>
@endsection

