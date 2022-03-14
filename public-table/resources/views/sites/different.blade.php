@extends('layout')
@section('title', 'Different')

@section('content')

    <div class="center">
        <h1>This is the public Difference-Table</h1>
    </div>

    <!-- +- Tabelle -->
    <form method="post" action="url('/update-different`)">
        @csrf
        <table>
            <tr>
                <th>+</th>
                <th>-</th>
            </tr>

            @foreach($data as $dat)
                <tr>
                    <td>{{$dat->plus}}</td>
                    <td>{{$dat->minus}}</td>
                </tr>
            @endforeach

        </table>
        <input type="Submit" value="Submit" name="submit_button" class="dropa">
    </form>

@endsection

