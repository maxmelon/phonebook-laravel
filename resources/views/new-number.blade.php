@extends('contact')

@section('addNewNumber')
    <hr>
    <form method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" id="number" name="number" placeholder="e.g. +7 (901) 234-56-78">
        </div>
        <div class="form-group">
            <select class="form-control" id="type" name="type">
                <option>home</option>
                <option>work</option>
                <option>mobile</option>
                <option>home fax</option>
                <option>work fax</option>
                <option>other</option>
            </select>
        </div>
        <div class="form-group row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary btn-lg" role="button">Save</button>
                <a class="btn btn-secondary btn-lg" href="/contact/{{ $contact->id }}" role="button">Cancel</a>
            </div>
        </div>
    </form>
    <hr>
@stop