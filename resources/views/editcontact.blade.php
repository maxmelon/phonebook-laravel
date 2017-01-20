@extends('layout')

@section('title')
    Phone Book: {{ $contact->name }} / Edit
@stop

@section('content')
    <form method="post">
        {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{ $contact->name }}">
    </div>
    <h6 class="card-subtitle mb-2 text-muted">
        @if($contact->tag != 'None' && $contact->tag != 'none')
            <i>{{ $contact->tag }}</i>
        @endif
    </h6>

    @if($contact->phoneNumbers->isEmpty())

        This person has no associated phone numbers. <a href="/contacts/{{ $contact->id }}/new-number">Add one now</a>.

    @else
            @foreach($contact->phoneNumbers as $phoneNumber)
                <div class="row mb-2">
                    <div class="col-4">
                        <select class="form-control form-control-lg" id="{{ $phoneNumber->id }}-type" name="{{ $phoneNumber->id }}-type">
                            @include('partials.select.numbertypes')
                        </select>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control form-control-lg" id="{{ $phoneNumber->id }}-number" name="{{ $phoneNumber->id }}-number" value="{{ $phoneNumber->number }}">
                    </div>
                    <div class="col-1 ml-auto my-auto">
                        <a href="/number/{{ $phoneNumber->id }}/delete" class="card-link close" style="color: #ce8483">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                </div>
            @endforeach
                <hr>
                <div class="form-group row">
                    <div class="col text-center mt-2">
                        <button type="submit" class="btn btn-success btn-lg" role="button">Save</button>
                        <a class="btn btn-secondary btn-lg" href="/contact/{{ $contact->id }}" role="button">Cancel</a>
                    </div>
                </div>
    @endif

    </form>

@stop