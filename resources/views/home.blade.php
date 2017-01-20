@extends('layout')

@section('title')
    Phone Book: Homepage
@stop

@section('content')

    <h4 class="card-title text-center">Welcome, {{ Auth::user()->name }}!</h4>


    @if($contacts->isEmpty())
        <p class="text-center">Thanks for signing up! <a href="/add">Let's create your very first contact!</a></p>
    @else
        <div class="row">
            <div class="col text-right mb-2"><a href="/add">New Contact</div>
        </div>
        <div class="list-group">
            @foreach($contacts as $contact)
            <a href="contact/{{ $contact->id }}" class="list-group-item list-group-item-action">{{ $contact->name }}</a>
            @endforeach
        </div>
    @endif

@stop

