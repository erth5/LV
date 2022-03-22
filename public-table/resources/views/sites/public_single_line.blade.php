@extends('layout')

@section('title', 'Public Table')
@section('content')
    <div class="center">
        <h1>This is the first line from public Table</h1>
    </div>

    <table>
        <tr>
            <th>Date</th>
            <th>Autor</th>
            <th>Argument 1</th>
            <th>Argument 2</th>
            <th>Argument 3</th>
            <th>Save Data per Line</th>
        </tr>

        <tr>
            <td class="center" class="only_out">{{$data->date}}</td>
            <td>
                <label>
                    <input type="text" maxlength="255" autocomplete="on" placeholder="{{$data->editor}}">
                </label>
            </td>
            <td>
                <label>
                    <input type="text" maxlength="255" autocomplete="on" placeholder="{{$data->word1}}">
                </label>
            </td>
            <td>
                <label>
                    <input type="text" maxlength="255" autocomplete="on" placeholder="{{$data->word2}}">
                </label>
            </td>
            <td>
                <label>
                    <input type="text" maxlength="255" autocomplete="on" placeholder="{{$data->word3}}">
                </label>
            </td>
            <td>
                No Saving option on here
            </td>
        </tr>
    </table>
    <p class="center"> Like Single </p>
@endsection
