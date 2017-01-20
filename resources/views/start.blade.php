@extends('layout')

@section('title')
    Phone Book: Welcome
@stop

@section('content')
    <div class="row">
        <div class="col text-center">
        <h4>Welcome to Phone Book!</h4>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <p>
                For using Phone Book, please <a href="{{ url('/register') }}">Register</a> or <a href="{{ url('/login') }}">Login</a>.
            </p>
        </div>
    </div>
@stop