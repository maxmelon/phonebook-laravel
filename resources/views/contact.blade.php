@extends('layout')

@section('title')
    Phone Book: {{ $contact->name }}
@stop

@section('content')
    <h4 class="card-title">{{ $contact->name }}</h4>
    <h6 class="card-subtitle mb-2 text-muted">
        <i>{{ $contact->tag }}</i>
    </h6>

    @if($contact->phoneNumbers->isEmpty())

        This person has no associated phone numbers. <a href="/contact/{{ $contact->id }}/new-number">Add one now</a>.

    @else
    <ul class="list-group my-3">
        @foreach($contact->phoneNumbers as $phoneNumber)
            <li class="list-group-item justify-content-between">
                <h5 class="my-1">
                    <span class="badge badge-info badge-pill">{{ $phoneNumber->type }}</span>
                </h5>
                <h5 class="my-1">
                    {{ $phoneNumber->number }}
                </h5>
            </li>
        @endforeach
    </ul>
    @endif

    @yield('addNewNumber')

    @include('partials.cardmenu')

@stop
