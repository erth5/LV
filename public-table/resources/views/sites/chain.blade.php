@extends('layout')
@section('title', 'Chain')

@section('content')

    <div class="center">
        <h1>This is the public Chain-Table</h1>
    </div>

    <!-- Tabelle -->
    <form method="post" action="{{ url('/store-chain') }}">
        @csrf
        <table>
            <tr>
                <th>Save Date</th>
                <th>Autor Session ID</th>
                <th>Messages</th>
            </tr>
            @foreach ($data as $column)
                <tr>
                    <td>{{ $column->date }}</td>
                    <td style="word-break: break-all">{{ $column->editor }}</td>
                    <td style="word-break: break-all">{{ $column->word }}</td>
                </tr>
            @endforeach
            <tr>
                <td style="word-break: break-all">{{ date(now()) }}</td>
                <td style="word-break: break-all">{{ Cookie::get('laravel_session') }}</td>
                <td>
                    <label>
                        <input name="word" type="text" maxlength="255" autocomplete="on" placeholder="Your Message">
                    </label>
                </td>
            </tr>
        </table>
        <!--Wordbreak Funktioniert hier nicht -->
        <input style="word-break: break-all" type="submit" value="Submit" name="submit_button" class="dropa">
    </form>

    @isset($dopple_user_warning)
        <h2 class="center">{{ $dopple_user_warning }}</h2>
    @endisset

    <p class="center"> Like Blockchain </p>

@endsection
