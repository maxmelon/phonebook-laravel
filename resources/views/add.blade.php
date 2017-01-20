@extends('layout')

@section('title')
    Add New Contact
@stop

@section('content')

    <h4 class="card-title text-center">New Contact</h4>

    <form method="POST" action="/contact">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <select class="form-control" id="tag" name="tag">
            @include('partials.select.contacttag')
            </select>
        </div>
        <div class="form-group row">
            <div class="col text-center">
                <button type="submit" class="btn btn-success btn-lg" role="button">Save</button>
            </div>
        </div>
    </form>

@stop
