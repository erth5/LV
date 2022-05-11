@extends('layout')
@section('title', 'Calendar')
@section('content')

    <div class="center">
        <h1>This is a Calendar</h1>
    </div>

    <form method="post" action="{{ url('/update-calendar') }}">
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

            <!-- Vorhandene Einträge anzeigen-->
            @foreach ($data as $dat)
                <tr>
                    <td>
                        <label>
                            <input type="text" name="editor{{ $dat->id }}" maxlength="255" autocomplete="on"
                                placeholder="{{ $dat->editor }}">
                        </label>
                    </td>

                    <td>
                        <label>
                            <!--    Form by https://laravel.com/docs/4.2/html not found from laravel
                                     Form::checkbox("chcbox1$dat->mo", 'true') !!}
                                     name="chcbox1{{ '$dat->id' }}
                                        -->
                        </label>
                        <label>
                        </label>
                        @php
                            if ($dat->mo) {
                                echo 'Agree';
                            } else {
                                echo 'Don`t Agree';
                            }
                        @endphp
                        </label>
                    </td>
                    <td>
                        @php
                            if ($dat->tu) {
                                echo 'Agree';
                            } else {
                                echo 'Don`t Agree';
                            }
                        @endphp
                    </td>
                    <td>
                        @php
                            if ($dat->we) {
                                echo 'Agree';
                            } else {
                                echo 'Don`t Agree';
                            }
                        @endphp
                    </td>
                    <td>
                        @php
                            if ($dat->th) {
                                echo 'Agree';
                            } else {
                                echo 'Don`t Agree';
                            }
                        @endphp
                    </td>
                    <td>
                        @php
                            if ($dat->fr) {
                                echo 'Agree';
                            } else {
                                echo 'Don`t Agree';
                            }
                        @endphp
                    </td>
                    <td>
                        @php
                            if ($dat->sa) {
                                echo 'Agree';
                            } else {
                                echo 'Don`t Agree';
                            }
                        @endphp
                    </td>
                    <td>
                        @php
                            if ($dat->su) {
                                echo 'Agree';
                            } else {
                                echo 'Don`t Agree';
                            }
                        @endphp
                    </td>
                </tr>
            @endforeach


            <!-- Neuer Eintrag -->
            <tr>
                <td>
                    <input type="text" name="editor" maxlength="255" placeholder="Your Name">
                </td>

                <td>
                    <label>Your Status
                        <input type="checkbox" name="chcbox_mo" value="1">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox_tu" value="true">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox_we">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox_th">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox_fr">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox_sa">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="checkbox" name="chcbox_su" placeholder="{{ $dat->so }}">
                    </label>
                </td>
            </tr>

        </table>
        <input class="dropa" type="submit" value="Save Data" name="submit_button">
    </form>
@endsection
