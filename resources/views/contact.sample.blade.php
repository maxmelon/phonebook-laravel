@extends('layout')

@section('content')
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-block">

                        <h4 class="card-title">John Smith</h4>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <i>Sample Corp.</i>
                        </h6>

                        <ul class="list-group my-3">
                            <li class="list-group-item justify-content-between">
                                <h5 class="my-1">
                                    <span class="badge badge-info badge-pill">моб.</span>
                                </h5>
                                <h5 class="my-1">
                                    +7 912 789 52 63
                                </h5>
                            </li>
                        </ul>

                        <div class="row">
                            <div class="col text-right">
                                <a href="#" class="card-link ">Add Number</a>
                                <a href="#" class="card-link ">Edit</a>
                                <a href="#" class="card-link" style="color: #ce8483">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@stop
