@extends('layout')
@section('content')
    <h1 class="center">please choose a tab</h1>
    <div id="bottom">
        <p class="center"><!--
        {{date("h:i:sa") }} {{ date("Y/m/d") }}&nbsp;-->
            UNIX-Timestamp:&nbsp;{{ time() }}
        </p>
    </div>
@endsection
